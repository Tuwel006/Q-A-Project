<?php

class CreateUsersTable {
    public function up($conn) {
        $conn->query("DROP TABLE IF EXISTS users");
        
        $sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(100),
        last_name VARCHAR(100),
        email VARCHAR(150) UNIQUE,
        username VARCHAR(100) UNIQUE,
        password VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if (!$conn->query($sql)) {
        die("Error: " . $conn->error);
    }
    }
}
