<?php

echo "<table border='5'> <tr>";

echo "<tr>";
 for ($titulo = 1; $titulo <=10; $titulo++){
    echo "<td> tabla de $titulo</td>";
 }
echo "</tr>";
echo "<tr>";
for($i = 1; $i <= 10; $i++){
    echo "<td>";
        for($x = 1; $x <=10; $x++)
        {
            echo "$i * $x = ". ($i*$x). "<br>";

        }
    echo "</td>";

}

echo "</tr>";

echo "</table>"



?>