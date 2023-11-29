<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina para monitorear el inventario de la tienda">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="../media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon">
    <title>Inventario</title>
</head>
<body>
    <div style="background-image: url('media/imagenes/background.jpg');
        background-image: no-repeat; background-image: fixed; background-image: center; backdrop-filter: blur(3px);" 
        class="container">
        <a href="Precios.php"><button>Precios</button></a>
        <button>Inventario</button>
        <a href="Venta.php"><button>Venta</button></a>
        <a href="Contable.php"><button>Contabilidad</button></a>
        <a href="../index.php"><button>Salir</button></a>
    </div>
    <table class="table1">
        <tr>
            <td class="fondo1">
                <h3 style="font-size: 1em;" class="titulos">Modificar inventario</h3>
                <form action="../programs/realVenta.php" method="post">
                    <br>
                    <label for="">ID Producto</label>
                    <br><br>
                    <input name="Producto" type="text">
                    <br><br>
                    <label for="">Cantidad que se modifica</label>
                    <br><br>
                    <input name="Cantidad" type="text">
                    <br><br>
                    <button>Actualizar</button>
                    <br><br>
                </form>
            </td>
            <td>
                <h3 style="font-size: 1em;" class="titulos">Consultar Inventario</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <br>
                    <label for="">ID del producto</label>
                    <br><br>
                    <input name="producto" type="text">
                    <br><br>
                    <button>Consultar</button>
                    <br><br>
                </form>
            </td>
        </tr>
        <tr colspan = 2 ></tr>
            <?php
                
            ?>
    </table>
</body>
</html>