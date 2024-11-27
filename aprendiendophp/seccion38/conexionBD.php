<?php
$conexion = mysqli_connect("localhost","root","","php");
if(mysqli_connect_errno())


{   
    echo "la conexion a falltado". mysqli_connect_error();
} else{
echo"conexion satisfactoria". mysqli_connect_error();
}

mysqli_query($conexion, "SET NAMES 'UTF8'");
//consulta php
$query = mysqli_query($conexion,"SELECT * FROM notas");


while($nota = mysqli_fetch_assoc($query)){
echo "<h2>".$nota['titulo']."<br/>";
echo "<h2>".$nota['descripción']."<br/>";
echo "<h2>".$nota['color']."<br/>";

}
$sql = "insert into notas VALUES (null, 'esto es agregado ', 'con phb', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "datos correctos";
} else {
    echo "error". mysqli_error($conexion);
}

?>