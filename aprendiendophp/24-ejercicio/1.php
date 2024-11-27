<?php
session_start();

if(!isset($_SESSION["numero"])){
    $_SESSION ['numero'] = 0;
    
}
if (isset($_GET['counter']) && $_GET['counter']==1) {
    $_SESSION['numero']++;
}
if (isset($_GET['counter']) && $_GET['counter']==0) {
    $_SESSION['numero']--;
}

?>
<h1> el valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="1.php?counter=1">aumentar el valor </a><br/>
<a href="1.php?counter=0">disminuir el valor </a><br/>