<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Plascencia Ramos Jose Manuel">
    <meta name="Description" content="Pagina para revisar los datos contables derivados de las ventas">
    <!-- HOJA DE ESTILO GENERAL CSS-->
    <link rel="stylesheet" href="../media/css/general.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="media/imagenes/favicon.jpg" type="image/x-icon">
    <title>Contabilidad</title>
</head>
<body>
    <div style="background-image: url('media/imagenes/background.jpg');
        background-image: no-repeat; background-image: fixed; background-image: center; backdrop-filter: blur(3px);" 
        class="container">
        <a href="Precios.php"><button>Precios</button></a>
        <a href="Inventario.php"><button>Inventario</button></a>
        <a href="Venta.php"><button>Venta</button></a>
        <button>Contabilidad</button>
        <a href="../index.php"><button>Salir</button></a>
    </div>
    <table class="table1">
        <tr>
            <td class="fondo1">
                <h3 style="font-size: 1em;" class="titulos">Consultar ganacia por proveedor</h3>
                <form action="" method="post">
                    <br>
                    <label for="">ID Proveedor</label>
                    <br><br>
                    <input name="proveedor" type="text">
                    <br><br>
                    <button>Consultar</button>
                    <br><br>
                </form>
            </td>
            <td>
                <h3 style="font-size: 1em;" class="titulos">Consultar gasto por proveedor</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <br>
                    <label for="">ID Proveedor</label>
                    <br><br>
                    <input name="Proveedor" type="text">
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