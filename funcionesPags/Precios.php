<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina para monitorear los precios de los productos">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="../media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon">
    <title>Precios</title>
</head>
<body>
    <div class="container">
        <button>Precios</button>
        <a href="Inventario.php"><button>Inventario</button></a>
        <a href="Venta.php"><button>Venta</button></a>
        <a href="Contable.php"><button>Contabilidad</button></a>
        <a href="../index.php"><button>Salir</button></a>
    </div>
    <table class="table1">
        <tr>
            <td class="fondo1">
                <h3 style="font-size: 1em;" class="titulos">Actualizar precios</h3>
                <form action="../programs/ActualizarP.php" method="post">
                    <br>
                    <label for="">Clave del Producto</label>
                    <br><br>
                    <input name="Clave" type="text">
                    <br><br>
                    <label for="">Nuevo precio</label>
                    <br><br>
                    <input name="NPrecio" type="text">
                    <br><br>
                    <button>Actualizar</button>
                    <br><br>
                </form>
            </td>
            <td>
                <h3 style="font-size: 1em;" class="titulos">Consultar precios</h3>
                <form action="ConsultarP.php" method="post">
                    <br>
                    <label for="">Nombre</label>
                    <br><br>
                    <input name="Nombre" type="text">
                    <br><br>
                    <button>Consultar</button>
                    <br><br>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>