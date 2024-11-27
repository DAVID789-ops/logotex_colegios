<?php


if (isset($_POST) )
require_once 'includes/conexion.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    
{
    //Recoger los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : false;

    //array de errores
     $errores = array();

    // validar los datos antes de guardarlos en la base de datos
    //validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){
        $nombre_validado = true;
    }
    else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";

    }
    // valida apellidos
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido) )
    {
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores["apellido"] = "El apellido es inválido";
    }
    //validar email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores["email"] = "el email es incorrecto";
    }
    //validar password
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores["password"] = "la contraseña esta vacía";
    }

    $guardar_usuario = false;

    if (count($errores) ==0) {
        $guardar_usuario = true;  
        // cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
        //insertar datos en la db

        $sql = "INSERT INTO USUARIOS VALUES(null, '$nombre', '$apellido', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        
        if ($guardar) {
            $_SESSION['completado'] = "el registro se ha completado con éxito ";

        }else{
            $_SESSION["errores"]['general']= "Fallo al guardar el usuario";
        }

        // insertar usuario en la bd
    }else{
        $_SESSION['errores'] = $errores;
        header('Location; index.php');
    }
}

header('Location: index.php')

?>