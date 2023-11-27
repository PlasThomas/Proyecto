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
    <title>Inicio</title>    
</head>
<style>
    body{
        background-image: url('media/imagenes/background.jpg');
    }
</style>
<body>
    <div class="table0">
        <h1 class="titulos">Bienvenido</h1>
    </div>
    <div>
        <table class="table0">
            <tr>
                <td class="fondo1" style="width: 50%;" >
                    <p class="p2">Esta pagina es un punto de venta tiendas de abarrotes
                    <br>para ayudar con la contabilidad, el control de los empleados
                    <br>y el inventario, todo esto con el proposito de ayudar
                    <br>a la administracion del negocio</p>
                    <p class="p2">Chi cheñol</p>
                </td>
                <td class="fondo2" style="width: 50%;">
                    <form action="LogIn.php" method="post">
                        <div class="p1">
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
                </td>
            </tr>
            <tr>
                <td class="p1" colspan="2">
                    <p> Para registrarse pulse el boton</p>
                    <a href="registro.php"><button>Sing in</button><br><br>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>