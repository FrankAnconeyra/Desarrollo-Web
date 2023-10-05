<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="">
    Ingresar importe total vendido del mes:<br> <input type="text" name="totalVendido"><br>
    Ingresar cantidad de hijos en edad escolar:<br> <input type="text" name="hijosEscolar"><br>
    <input type="submit" name="Calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['Calcular'])) {
        $totalVendido = $_POST['totalVendido'];
        $hijosEscolar = $_POST['hijosEscolar'];
        
        $sueldoBasico = 600;
        $comision = $totalVendido * 0.075;
        $bonificacion = $hijosEscolar * 50;
        $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
        $descuento = $sueldoBruto * 0.11;
        $sueldoNeto = $sueldoBruto - $descuento;

        echo "Sueldo Básico: S/. " . $sueldoBasico . "<br>";
        echo "Comisión: S/. " . $comision . "<br>";
        echo "Bonificación: S/. " . $bonificacion . "<br>";
        echo "Sueldo Bruto: S/. " . $sueldoBruto . "<br>";
        echo "Descuento: S/. " . $descuento . "<br>";
        echo "Sueldo Neto: S/. " . $sueldoNeto . "<br>";
    }
    ?>
</body>
</html>
