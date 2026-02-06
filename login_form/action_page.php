<?php/*
    session_start();
    if(isset($_POST["uname"]))
    {
        session_start();
        $_SESSION["psw"] = $_POST["psw"];
        $_SESSION["uname"] = $_POST["uname"];
    }
    else echo "Heslo nebo login se neshodují <br>";
    if(isset($_SESSION["uname"])) //isset jestli proměnná existuje, super global session jestli existuje uname ???
    {
        $pass = $_POST["psw"];
        $user = $_POST["uname"];
        //$save = $_POST["remember"] === "on" ? true : false;

        echo "uživatel $user a heslo $pass";

    }
    else
    {
        echo "uživatel není autorizovaný";
    }

    

    */

    session_start();
    if(isset($_POST["uname"]))
    {
        echo "uživatel $user a heslo $pass"
        echo '
        <form action"" method="get">

        </form'
    }
?>