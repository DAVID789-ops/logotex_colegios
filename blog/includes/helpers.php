<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }

    return $alerta;
}

function borrarError(){
    $borrado=false;
        if(isset($_SESSION['errores'])){
    $_SESSION['errores'] = null;
    $borrado = session_unset();
    }

    
    if(isset($_SESSION['completado'])){
    $_SESSION['completado'] = null;
    $borrado = session_unset();
    }
    return $borrado;
}
?>