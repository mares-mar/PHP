<?php

$dsn = "mysql:host=localhost;dbname=nevim";
$username = "root2";
$password = "password";

try{

    $db = new PDO($dsn, $username, $password);
    echo "You have connected!";
    }
    catch(PDOException $e){
    echo "nelze se připojit k db" .$e->getMessage();
    exit();
    }


$sql = "INSERT INTO people (name, email)
VALUES ('pepa','mail@mail.cz')" ;

if ($db->query($sql) === TRUE){
    echo "New record successful";

} else {
    echo "Error:" .$sql . "<br>" .$db->error;
}

$db->close();
?>