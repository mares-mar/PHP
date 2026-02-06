<?php

session_start();

$valid_username = 'admin';
$valid_password = 'admin';

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password ){
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php');
        exit;

    }else{
    $error = 'Špatné jméno nebo heso';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if ($error): ?>
    <p><?= $error?></p>
<?php endif;?>

<form action="" method="POST">
    <input type="text" name="username" id="">

    <input type="password" name="password" id="">

    <button type="submit">Přihlásit</button>
</form>
    <p>admin admin</p>
</body>
</html>