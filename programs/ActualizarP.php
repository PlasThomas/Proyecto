<?php
    include "Conexion.php";
    $id = $_POST['Clave'];
    $precio = $_POST['NPrecio'];

    $q = "UPDATE productos set precio_ven = $precio where ID_productos = $id";
    
    if(mysqli_query($conexion,$q)){
        echo "Precio modificado";
        header("location: ../funcionesPags/Precios.php");
    }else{
        echo "ni modo";
        header("location: ../funcionesPags/Precios.php");
    }

?>