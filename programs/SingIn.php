<?php
session_start();
include "Conexion.php";
$usuario = $_POST['Nombre'];
$telefono = $_POST['Telefono'];
$email = $_POST['Email'];
$password = $_POST['password'];

$q = "INSERT into Usuarios (Nombre, Contraseña, Telefono, Email)values 
('$usuario', '$password','$telefono', '$email')";

if(mysqli_query($conexion,$q)){
    echo "Usuario Registrado";
}else{
    echo "error";
}

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE Nombre = '$usuario' AND Contraseña = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    header("location: ../Inicio.php");
}else{

        header("location: ../index.php");

echo "error";

}
?>