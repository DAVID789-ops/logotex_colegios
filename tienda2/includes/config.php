<?php
define('DB_SERVER','50.87.144.39');
define('DB_USER','logotexp_chino');
define('DB_PASS' ,'cJU1C1SPGeFt1nn');
define('DB_NAME', 'logotexp_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>