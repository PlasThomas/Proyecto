<?php
$host_db = "localhost:3307";
$user_db = "root";
$pass_db = "1234";
$db_name = "Tienda";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló jiji: " . $conexion->connect_error);
}
?>