<?php

function muestrNombres(){
    echo  "David". "<br>";
    echo  "David". "<br>";
    echo  "David". "<br>";
    echo  "David". "<br>";
    echo  "David". "<br>";

    
}
muestrNombres();

function tabla($numero){
    echo "<h3> Tabla de multiplicar del número: $numero </h3>";

    for ($i = 1; $i<=10; $i++ ){
        $operacion = $numero * $i;
        echo "$numero * $i = $operacion"."<br>";
    }
}

tabla(55);

function calculadora($numero1, $numero2, $negra = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;

  

    if ($negra == true){
        echo "<h1>";
    }
    echo "suma: $suma </br>";
    echo "resta: $resta </br>";
    echo "multi: $multi </br>";
    echo "divi: $divi </br>";

    if ($negra == true){
        echo "</h1>";
    }


}


calculadora(10,11);

function devuelve($nombre){
    return"el nombre es; $nombre";
}
 
echo devuelve("david");
?>