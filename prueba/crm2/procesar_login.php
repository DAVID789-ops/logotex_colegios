<?php
session_start();
include_once "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $bd = obtenerBD();
    $sentencia = $bd->prepare("SELECT * FROM usuarios WHERE username = ?");
    $sentencia->execute([$username]);
    $usuario = $sentencia->fetch();

    if ($usuario && password_verify($password, $usuario['password_hash'])) {
        // Inicio de sesión exitoso
        $_SESSION['usuario'] = $usuario['username'];
        header("Location: ver_ventas.php"); // Redirigir a la página principal después del inicio de sesión
        exit();
    } else {
        // Credenciales incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
