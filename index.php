<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q & A Project</title>
    <?php include './client/commonFiles.php' ?>
</head>
<body>
    <?php 
    include './client/Header.php'; 
    include './config/index.php';
    $page = $_GET['page'] ?? '';
    if($page === 'signup') {
        include './client/signup.php';
    }
    else if($page === 'login') {
        include './client/login.php';
    }
    ?>
</body>
</html>