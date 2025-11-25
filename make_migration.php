<?php

if ($argc < 2) {
    die("Usage: php make_migration.php migration_name\n");
}

$migrationName = $argv[1]; // example: create_users_table

// Generate timestamp for filename (similar to Laravel)
$timestamp = date('Y_m_d_His');

$filename = "migrations/" . $timestamp . "_" . $migrationName . ".php";

// Convert snake_case to StudlyCase for class name
$parts = explode('_', $migrationName);
$className = implode('', array_map('ucfirst', $parts));

$template = "<?php

class $className {
    public function up(\$conn) {
        // Write SQL here
    }
}
";

if (!file_exists('migrations')) {
    mkdir('migrations', 0777, true);
}

file_put_contents($filename, $template);