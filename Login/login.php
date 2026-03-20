<!DOCTYPE html>
<html lang="en">
<?php
session_start();


echo file_get_contents("./login_log.txt");

/*    if (!$fp_r = fopen("login_log.txt",'r')) {
        echo "Cannot open file (./login_log.txt,read)";
        exit;
    }

    $zapsane = fread($fp_r,filesize("login_log.txt"));
    echo $zapsane;
    fclose($fp_r);

readfile("login_log.txt");*/

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Přihlásil ses</p>


    <form action="" method="post">
    <button type="submit" name="submit" id="submit">Odhlášení</button>
    </form>
    
    
    <?php

    if(isset($_POST["submit"])){

    session_destroy();
    session_unset();
    header('Location: index.php');
    }
    
    ?>
    
    
</body>
</html>