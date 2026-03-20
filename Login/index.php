<!DOCTYPE html>
<html lang="en">
<?php

session_start();

function logLogin($username, $sucess){
    $file = "login_log.txt";
    $date = date('d.m.Y H:i:s');
    $status = $sucess ? "Uspech" :"Neuspech";
    $line = "$date $status Uzivatel: $username"."\n";
    file_put_contents($file,$line, FILE_APPEND | LOCK_EX);
}

$valid_username = 'admin';
$valid_password = 'admin';

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password ){
        $_SESSION['username'] = $_POST['username'];
        logLogin($_POST['username'], true);
        header('Location: login.php');
        exit;

    }else{
    $error = 'Špatné jméno nebo heslo';
    logLogin($_POST['username'], false);
    echo $error;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>username: </p><input type="text" name="username" id="username"> <br>
        <p>Password: </p> <input type="text" name="password" id="password"> <br>

        <button type="submit">Login</button>
    </form>


    
</body>
</html>