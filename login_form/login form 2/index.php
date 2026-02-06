<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (!isset($_SESSION['username'])){
    header('Location: login.php');
    exit;
}   

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vítej</h1>

    <p>
        <a href="logout.php">Odhlášení</a>
    </p>
    
</body>
</html>