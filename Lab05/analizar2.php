<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Gaseosa</title>
</head>
<body>
    <form method="post" action="">
        Precio actual de la gaseosa (por litro): <input type="text" name="precioGaseosa"><br>
        Cantidad de unidades adquiridas: <input type="text" name="cantidad"><br>
        <input type="submit" name="Calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['Calcular'])) {
        $precioGaseosa = $_POST['precioGaseosa'];
        $cantidad = $_POST['cantidad'];

        $nuevoPrecio = $precioGaseosa * 0.95;
        $importeCompra = $nuevoPrecio * $cantidad;
        $descuento = $importeCompra * 0.07;
        $importeAPagar = $importeCompra - $descuento;
        $obsequio = $cantidad * 2;

        echo "Nuevo precio de la gaseosa (por litro): S/. " . $nuevoPrecio . "<br>";
        echo "Importe de la compra: S/. " . $importeCompra . "<br>";
        echo "Importe del descuento: S/. " . $descuento . "<br>";
        echo "Importe a pagar: S/. " . $importeAPagar . "<br>";
        echo "Obsequio (cantidad de caramelos): " . $obsequio . "<br>";
    }
    ?>
</body>
</html>
