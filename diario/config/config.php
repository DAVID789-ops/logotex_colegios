<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PersonalTracker";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$usuario_id = $_POST['usuario_id'];

// Obtener la fecha y la hora actuales
$fecha_actual = date('Y-m-d');
$hora_actual = date('H:i:s');

// Diario
$descripcion_diario = $_POST['descripcion_diario'];
$sql_diario = "INSERT INTO Diario (usuario_id, fecha, hora, descripcion) VALUES ('$usuario_id', '$fecha_actual', '$hora_actual', '$descripcion_diario')";

// Prioridades
$prioridad_tipo = $_POST['prioridad_tipo'];
$descripcion_prioridad = $_POST['descripcion_prioridad'];
$sql_prioridad = "INSERT INTO Prioridades (usuario_id, tipo, descripcion, fecha) VALUES ('$usuario_id', '$prioridad_tipo', '$descripcion_prioridad', '$fecha_actual')";

// Metas
$meta_tipo = $_POST['meta_tipo'];
$descripcion_meta = $_POST['descripcion_meta'];
$fecha_inicio_meta = $_POST['fecha_inicio_meta'];
$fecha_fin_meta = $_POST['fecha_fin_meta'];
$sql_meta = "INSERT INTO Metas (usuario_id, tipo, descripcion, fecha_inicio, fecha_fin) VALUES ('$usuario_id', '$meta_tipo', '$descripcion_meta', '$fecha_inicio_meta', '$fecha_fin_meta')";

// Comida
$tipo_comida = $_POST['tipo_comida'];
$calorias = $_POST['calorias'];
$sql_comida = "INSERT INTO Comida (usuario_id, fecha, comida, calorias) VALUES ('$usuario_id', '$fecha_actual', '$tipo_comida', '$calorias')";

// Agua
$vasos = $_POST['vasos'];
$sql_agua = "INSERT INTO Agua (usuario_id, fecha, vasos) VALUES ('$usuario_id', '$fecha_actual', '$vasos')";

// Sueño
$descripcion_sueno = $_POST['descripcion_sueno'];
$horas_dormidas = $_POST['horas_dormidas'];
$sql_sueno = "INSERT INTO Sueno (usuario_id, fecha, descripcion, horas_dormidas) VALUES ('$usuario_id', '$fecha_actual', '$descripcion_sueno', '$horas_dormidas')";

// Ejercicio
$tipo_ejercicio = $_POST['tipo_ejercicio'];
$duracion_ejercicio = $_POST['duracion_ejercicio'];
$sql_ejercicio = "INSERT INTO Ejercicio (usuario_id, fecha, tipo_ejercicio, duracion) VALUES ('$usuario_id', '$fecha_actual', '$tipo_ejercicio', '$duracion_ejercicio')";

// Ejecutar las consultas
if ($conn->query($sql_diario) === TRUE && $conn->query($sql_prioridad) === TRUE && $conn->query($sql_meta) === TRUE && $conn->query($sql_comida) === TRUE && $conn->query($sql_agua) === TRUE && $conn->query($sql_sueno) === TRUE && $conn->query($sql_ejercicio) === TRUE) {
    echo "Datos registrados exitosamente.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>