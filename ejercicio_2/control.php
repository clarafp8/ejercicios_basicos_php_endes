<?php

var_dump($_GET);
//var_dump($_SERVER);


$distancia=$_GET['distancia'];
echo $distancia;

$velocidad=$_GET['velocidad'];
echo "<br>Distancia: $distancia km y la velocidad: $velocidad km/h";
$tiempo= $distancia/$velocidad;
echo "<h2 style='color:red;'>La estimación de tiempo es $tiempo horas </h2>";

?>

