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
    <div style="background-image: url('media/imagenes/background.jpg');
        background-image: no-repeat; background-image: fixed; background-image: center; backdrop-filter: blur(3px);" 
        class="container">
        <button>Precios</button>
        <a href="Inventario.php"><button>Inventario</button></a>
        <a href="Venta.php"><button>Venta</button></a>
        <a href="Contable.php"><button>Contabilidad</button></a>
        <a href="../index.php"><button>Salir</button></a>
    </div>
    <table class="table0">
        <tr>
        <td>
            <h2 class="titulos">Actualizar precios</h2>
            <form action="Actualizar.php" method="post">

            </form>
        </td>
        <td>
            <h2 class="titulos">Consultar precios</h2>
            <form action="Consulta.php" method="post">
                
            </form>
        </td>
        </tr>
    </table>
</body>
</html>