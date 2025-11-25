<?php

class CreateMigrationsTable {
    public function up($conn) {
        $sql = "CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        if (!$conn->query($sql)) {
            die("Error creating migrations table: " . $conn->error);
        }
    }
}
