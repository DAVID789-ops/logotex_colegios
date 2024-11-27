<?php


function ValidarEmail($imail) {
    $status = "no válido.";

    if(!empty($imail) && filter_var($imail, FILTER_VALIDATE_EMAIL)) {
        $status = "válido";
    
    }
    return $status;
}
if(isset($_GET["email"])) {
    echo validarEmail($_GET["email"]);
} else {
    echo"pasa por get un email";
}