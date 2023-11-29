<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina de registro para un nuevo Usuario">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="./media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon"> 
    <title>Registro</title>
</head>
<style>
    body{
        background-image: url('media/imagenes/background.jpg');
    }
</style>
<body>
    <div style="text-align: left; padding: 2em;">
        <a href="index.php">
            <button>Regresar</button>
        </a>
    </div>
    <form action="./programs/SingIn.php" method="post" class="ventana">
        <div class="fondo1">
            <br>
            <label for="">Nombre </label>
            <br><br>
            <input name="Nombre" type="text" placeholder="Ingresa Usuario" required >
            <br><br>
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
            <button>Log in</button> <br> <br>
            <br>
        </div>
    </form>
</body>
</html>