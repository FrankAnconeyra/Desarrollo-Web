<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Operaciones con PHP</title>
</head>
<body>
    <form method="post" actions="">
    Ingresar valor 1:<br>  <input type="text" name="valor1"><br>
    Ingresar valor 2:<br>  <input type="text" name="valor2"><br>
    <input type="submit" name="Suma" value="Suma">

    </form>
<?php
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
         $suma=$numero1 +$numero2;
         echo "El resultado de la suma es  : " .$suma;
?>
</body>
</html>