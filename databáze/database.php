<?php
//datavaze je v xampp mysql data
$dsn = "mysql:host=localhost;dbname=$dbname";
$username = "root2";
$password = "password";
$dbname = "databaze"

function smazani_radku($id,$nazev_databaze)
{
    $pre_sql = "DELETE from $nazev_databaze Where $id = :id ";

    $statement = $db->prepare($pre_sql);
    $statement->bindParam('id', $id, PDO::PARAM_INT);

    if ($statement->execute()) {
        echo 'id ' . $id . ' was deleted successfully from database $nazev_databaze.';
    }


}

function vypsani_tabulky($nazev_databaze){

    $sql = 'SELECT id, name, email from people';

    $statement = $db->query($sql);

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($data) {
	
	    foreach ($data as $tabulka) {

		echo "ID: ". $tabulka['id']  . " Jmeno: ".$tabulka['name'] . " email: ". $tabulka['email'].'<br>';
	        }
    }

}


function pridani_radku($jmeno, $email, $nazev_databaze){

    $sql = "INSERT INTO $nazev_databaze (name, email) VALUES ($jmeno,$email)" ;

    if ($db->query($sql) == TRUE){
        echo "<br>New record successful <br>"; echo "$jmeno and $email added to database $nazev_databaze "

    } else {
        echo "Error:" .$sql . "<br>";
    }
}

try{

    $db = new PDO($dsn, $username, $password);
    echo "You have connected!";
    }
    catch(PDOException $e){
    echo "nelze se připojit k db" .$e->getMessage();
    exit();
    }









$db = null;
?>