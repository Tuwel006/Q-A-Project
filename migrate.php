<?php

require_once "./config/db.php";

$db = new Database();
$conn = $db->connect();

// 1. Run migrations table migration first
require_once "./migrations/000000_create_migrations_table.php";
$base = new CreateMigrationsTable();
$base->up($conn);

// Get list of already executed migrations
$result = $conn->query("SELECT migration FROM migrations");
$ran = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ran[] = $row['migration'];
    }
}

// Read migration files
$files = glob("./migrations/*.php");

// Sort by name (Laravel style)
sort($files);

foreach ($files as $file) {
    $migrationName = basename($file, ".php");

    // Skip migrations table itself
    if ($migrationName === "000000_create_migrations_table") {
        continue;
    }

    // Skip already executed migrations
    if (in_array($migrationName, $ran)) {
        echo "Already ran: $migrationName<br>";
        continue;
    }

    // Run new migration
    require_once $file;

    // Class name = file name converted to StudlyCase
    // Example: 2025_01_01_000001_create_users_table => CreateUsersTable
    $parts = explode('_', $migrationName);
    $className = implode('', array_map('ucfirst', array_slice($parts, 4)));

    $migration = new $className();
    $migration->up($conn);

    // Log migration
    $stmt = $conn->prepare("INSERT INTO migrations (migration) VALUES (?)");
    $stmt->bind_param("s", $migrationName);
    $stmt->execute();

    echo "Migrated: $migrationName<br>";
}

echo "<br>All migrations completed.";
