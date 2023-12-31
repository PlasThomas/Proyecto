<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina de inicio del proyecto final">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="./media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon">
    <title>Pagina de Inicio</title>
</head>
<style class= >
    body{
        background-image: url('./media/imagenes/background.jpg');
        background-image: no-repeat;
        background-image: fixed;
        background-image: center;
        background-size: cover;
        backdrop-filter: blur(3px);    
    }
</style>
<body>
    <div class="cosa">
        <a href="./funcionesPags/Precios.php"><button>Precios</button></a>
        <a href="./funcionesPags/Inventario.php"><button>Inventario</button></a>
        <a href="./funcionesPags/Venta.php"><button>Venta</button></a>
        <a href="./funcionesPags/Contable.php"><button>Contabilidad</button></a>
        <a href="./index.php"><button>Salir</button></a>
    </div>
    <div class="table1">
        <h3 style="font-size: 2em;" class="titulos">Eliminar Usuario</h3>
        
        <form action="./programs/elimina.php">
            <br>
            <label for="">Telefono</label>
            <br><br>
            <input name="Telefono" type="text" required  placeholder="Ingresa tu Telefono" required>
            <br><br>
            <label for="">Email</label>
            <br><br>
            <input name="Email" type="text" required  placeholder="Ingresa tu Email" required>
            <br><br>
            <label for="">Contraseña</label>
            <br><br>
            <input name="password" type="password" required  placeholder="Ingresa tu contrasenia" required>
            <br><br>
            <button>Eliminar Usuario</button>
            <br><br><br>
        </form>
    </div>
</body>
</html>