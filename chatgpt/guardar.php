<?php
$servidor = "50.87.144.39";
$usuario = "logotexp_david_form";
$clave = "cJU1C1SPGeFt1nn";
$bd = "logotexp_formulario";

$conexion = new mysqli($servidor, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if(isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['hora'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $hora = $_POST['hora'];
    $ampm = $_POST['ampm'];

    if(!empty($nombre) && !empty($telefono) && !empty($hora)) {
        $hora .= " $ampm";

        $sql = "INSERT INTO Clientes_potenciales (nombre, telefono, hora) VALUES ('$nombre', '$telefono', '$hora')";

        if ($conexion->query($sql) === TRUE) {
            echo "Datos enviados exitosamente";
        } else {
            echo "Error al enviar los datos: " . $conexion->error;
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "No se recibieron datos del formulario.";
}

$conexion->close();
?>