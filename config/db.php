<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "QADB";
    public $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password);

        $result = $this->conn->query("SHOW DATABASES LIKE '$this->database'");

        if($result->num_rows == 0) {
            if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $this->database";

        if($this->conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $this->conn->error;
        }
        }
        $this->conn->select_db($this->database);
        return $this->conn;
    }
}
?>