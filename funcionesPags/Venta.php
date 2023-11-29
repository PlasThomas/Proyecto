<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina para registrar y consultar las ventas">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="../media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon">
    <title>Venta</title>
</head>
<body>
    <div style="background-image: url('media/imagenes/background.jpg');
        background-image: no-repeat; background-image: fixed; background-image: center; backdrop-filter: blur(3px);" 
        class="container">
        <a href="Precios.php"><button>Precios</button></a>
        <a href="Inventario.php"><button>Inventario</button></a>
        <button>Venta</button>
        <a href="Contable.php"><button>Contabilidad</button></a>
        <a href="../index.php"><button>Salir</button></a>
    </div>
    <table class="table1">
        <tr>
            <td class="fondo1">
                <h3 style="font-size: 1em;" class="titulos">Realizar venta</h3>
                <form action="../programs/realVenta.php" method="post">
                    <br>
                    <label for="">ID Producto</label>
                    <br><br>
                    <input name="Producto" type="text">
                    <br><br>
                    <label for="">cantidad</label>
                    <br><br>
                    <input name="Cantidad" type="text">
                    <br><br>
                    <button>Realizar Venta</button>
                    <br><br>
                </form>
            </td>
            <td>
                <h3 style="font-size: 1em;" class="titulos">Consultar ventas</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <br>
                    <label for="">fecha</label>
                    <br><br>
                    <input name="fecha" type="text">
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