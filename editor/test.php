<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <input type="text" placeholder="sem něco zadej" name="text" id="text">

    <button type="submit" name="submit_write">Zapiš</button>

    <br>
    <button type="submit" name="submit_read">přečti</button>
    <br>
    <button type="submit" name="submit_delete">Delete</button>
    </form>
    <?php

    $soubory = "C:\xampp\htdocs";
    echo "Dostupné soubory";
    foreach ($soubory as $index => $soubor) {
        echo "[$index]" . basename($soubor). "\n";
    }
    echo "Zadej číslo soubory:";
    $volba = (int) trim(fgets(STDIN));

    $vybranysoubor = $soubory[$volba];

    if(isset($_POST["submit_write"])){

        if (!$fp_w = fopen($vybranysoubor,'a')) {
            echo "Cannot open file ($vybranysoubor,write)";
            exit;
        }
        $text = $_POST["text"];
        fwrite($fp_w,$text);
        fclose($fp_w);
    }

    if(isset($_POST["submit_read"])){
        if (!$fp_r = fopen($vybranysoubor,'r')) {
            echo "Cannot open file ($vybranysoubor,read)";
            exit;
        }

        $zapsane = fread($fp_r,filesize($vybranysoubor));
        echo $zapsane;
        fclose($fp_r);
    }

    if(isset($_POST["submit_delete"])){
        unlink($vybranysoubor);
    }

   
    
    ?>
</body>
</html>