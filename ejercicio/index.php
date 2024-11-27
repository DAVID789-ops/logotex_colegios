<?PHP

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "ejercicio2";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);


?>

<form action="#" name="ejercicio2" method="post">
<input type="text" name="nombre" placeholder="nombre">
<input type="text" name="hora" placeholder="hora">
<input type="text" name="telefono" placeholder="telefono">
<input type="submit" name="registro">
<input type="reset">

</form>
<?PHP

if(isset($_POST['registro'])){
 $nombre= $_POST ['nombre'];
 $hora= $_POST ['hora'];
 $telefono= $_POST ['telefono'];

 $insertarDatos = "INSERT INTO datos VALUES('$nombre','$hora','$telefono','')";

 $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

}
?>