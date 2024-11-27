<?php
// inicair la sesion y la conexion con la bd
require_once 'includes/conexion.php';

//recoger datos del formulario
if (isset($_POST)) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Consulta para comprobar las crendenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if (mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($password, $usuario["password"]);

        if ($verify) {
            //utilizar una sesion para guardar los datos del usuario logueado

            $_SESSION['usuario'] = $usuario;

            if (isset($_SESSION['error_login'])) {
                unset( $_SESSION['error_login'] );
            } 
        else {
                // soa lgo falla enviar una sesion con el fallo
                $_SESSION['error_login'] = "Login inconrrecto!!";
            }
        }    
    else {
        $_SESSION['error_login'] = "Login inconrrecto!!";

        

    }
    }

}

//comprobar la contraseña

//consulta para comprobar las crendenciales del usuario

// utilizr una sesion para guardar los datos del usuario logueado

// si algo falla envia runa sesion con el fallo

// redirigir al index.php
header('location:index.php');

?>