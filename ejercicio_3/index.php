<!--
El Mayor de Tres: Crea un programa que solicite tres números al usuario e indique cuál es
el mayor.
-->
<?php
/**
 * El Mayor de Tres: Crea un programa que solicite tres números al usuario e indique cuál es
 * el mayor.
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
</head>
<body>
<h1>Ejercicio 3</h1>
<h3>Dime 3 números:</h3>
<form action="control.php" method="get">
    <label for="numero1">Numero 1: </label><input type="number" name="numero1" ><br>
    <label for="numero2">Numero 2: </label><input type="number" name="numero2" ><br>
    <label for="numero3">Numero 3: </label><input type="number" name="numero3" ><br>
    <input type="submit" value="Enviar">
</form>


</body>
</html>
