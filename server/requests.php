<?php
require_once __DIR__ . '/../config/db.php';
$db = new Database();
$conn = $db->connect();

if(!$conn) {
    echo "<b> Database connction not found";
}

if(isset($_POST['signup'])){
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $confirm_password = $_POST['confirmPassword'];

    if($password !== $confirm_password) {
        echo "<b> Password not matching";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $username, $hashed_password);
    
    if($stmt->execute()) {
        echo "<br> Data Inserted successfully";
    } else {
        echo "<br> Error: " . $stmt->error;
    }

}
?>