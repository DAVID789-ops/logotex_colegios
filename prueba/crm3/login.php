<?php
require_once "funciones.php";

// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si ya está logeado, redirigir a dashboard si es así
if (usuarioAutenticado()) {
    header("location: dashboard.php");
    exit;
}

// Variables para almacenar mensajes de error y datos del formulario
$username = $password = "";
$username_err = $password_err = "";

// Procesar datos del formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar usuario
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, ingresa tu usuario.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validar contraseña
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, ingresa tu contraseña.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Verificar credenciales
    if (empty($username_err) && empty($password_err)) {
        // Obtener conexión a la base de datos
        $conn = obtenerBD();

        // Verificar credenciales
        if (verificarCredenciales($username, $password, $conn)) {
            // Redirigir a dashboard
            header("location: dashboard.php");
        } else {
            // Mostrar mensaje de error si las credenciales son inválidas
            $password_err = "El usuario o la contraseña son incorrectos.";
        }

        // Cerrar conexión
        $conn = null;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            width: 360px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 80px auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .has-error .form-control {
            border-color: #cc0000;
        }
        .help-block {
            color: #cc0000;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .button {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Iniciar Sesión</h2>
        <p>Por favor, ingresa tus credenciales para iniciar sesión.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
            </div>
            <a href="dashboard.php" class="button">Ir al Dashboard</a>
        </form>
    </div>
</body>
</html>
