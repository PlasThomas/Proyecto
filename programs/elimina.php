<?php
    session_start();
    include "Conexion.php";
    $Telefono = $_POST['Telefono'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $q = "DELETE from usuarios where telefono = '$Telefono' and email = '$email' and contraseña = '$password'";
     if(mysqli_query($conexion,$q)){
        echo "Usuario Eliminado";
        header("location: ../Inicio.php");
    }else{
        echo "error";
        header("location: ../Inicio.php");
    }
?>