<?php
    $border = 2;
    $row = $_POST["row"];
    $col = $_POST["col"];
    echo "<table border=$border>";
    for ($i = 0; $i < $row; $i++)
        {
            echo "<tr>";
            for($j = 0; $j < $col; $j++)
                echo "<td>$i.$j</td>";
            echo "</tr>";
        }
    echo "</table>";
?>