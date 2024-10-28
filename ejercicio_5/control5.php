<?php 
$num= $_GET['numero'];

$suma=0;
for($i=1;$i<=$num;$i++){
    $suma+= $i;
}
echo "La suma del 1 al $num es: $suma";
?>
<br>
<a href="formulario2.html">Atras</a>
