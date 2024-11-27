<?php

function mostrarArray($numeros){
    $resultado = "";

    foreach ($numeros as $numero) {
        $resultado .= $numero."<br/>";
    
    }
    return $resultado;
}

$numeros = [11, 10, 54, 68, 68, 2, 3];

echo "<h1> Recorrer y mostrar</h1>";
echo mostrarArray($numeros);


    echo "<h1>ordenar y mostrar</h1>";
    sort($numeros);
    echo mostrarArray($numeros);

    echo "<h1>numero total de elementos</h1>";
    echo count($numeros);
    
    //busqueda array
    $busqueda = 1;
    echo "<h1> buscar en el arra el numero $busqueda</h1>";

    if (array_search($busqueda, $numeros)){
        echo "<h4>el numero buscado exite en el array $busqueda </h4>";

    }else {
        echo "no existe el array";
    }


?>