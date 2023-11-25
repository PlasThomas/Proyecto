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
    <title>Inicio</title>    
    <title>Registro</title>
</head>
<style>
    body{
        background-image: url('media/imagenes/background.jpg');
    }
</style>
<body>
    <div style="text-align: left; padding: 2em;">
        <a href="index.html">
            <button>Regresar</button>
        </a>
    </div>
    <form action="SingIn.php" method="post">
        <div class="ventana">
            <br>
            <label for="">Nombre del Acceso</label>
            <br><br>
            <input name="nombre_usuario" type="text" placeholder="Ingresa Usuario" required class="tamaño">
            <br><br>
            <label for="">Contraseña</label>
            <br><br>
            <input name="password" type="password" required  placeholder="Ingresa contrasenia" class="tamaño">
            <br><br>
            <button>Log in</button> <br> <br>
            <br>
        </div>
    </form>
</body>
</html>