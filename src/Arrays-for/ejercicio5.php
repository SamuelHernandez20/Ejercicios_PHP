<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 5</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que realice las siguientes acciones:
  </b> 
<ul>
<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>
<li>Una vez que ha inicializado el array, imprima todos los valores que almacena.</li>
<li>Buscar el valor mínimo de los valores del array.</li>
<li>Muestre el valor mínimo que ha encontrado.</li>
</ul>
<hr>

<?php
   
   $valores_temp = array();

   for ($i = 0; $i < 10; $i++ ) {
       $random = rand(1,30);
       $valores_temp[]=$random;
       echo $random . "°C";
       echo "<br>";
   }
echo "<hr>";

$maximo_temp = max($valores_temp);
$minima_temp = min($valores_temp);

$suma = array_sum($valores_temp);
$cantidad_elementos = count($valores_temp);
$media_temp = $suma/$cantidad_elementos;

echo "<b>- Temperatura máxima</b>: $maximo_temp" . "°C";
echo "<br>";
echo "<b>- Temperatura mínima</b>: $minima_temp" . "°C";
echo "<br>";
echo "<b>- Temperatura media</b>: $media_temp" . "°C";


?>

</body>
</html>