<?php

$texto = "";
if (empty($texto)){
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMAYUS = strtoupper($texto);
    
    echo "<strong>$textoMAYUS.</strong>";
}

else {
    echo"la varialbe tiene este contenido";
}

?>