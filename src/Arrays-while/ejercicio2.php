<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 2 (Usando bucle While)</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que realice las siguientes acciones:
  </b> 
<ul>
<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>
<li>Una vez que ha inicializado el array, imprima todos los valores que almacena.</li>
<li>Calcular el valor medio de los valores del array.</li>
<li>Mostrar el valor medio que ha calculado.</li>
</ul>
<hr>

<?php
   
   $valores = array();
  
   $i = 1;
   while ($i <= 10) {
       
       $random = rand(1,30);
       echo $valores[]=$random;
       echo "<br>";
       $i++;
   }

   $suma = array_sum($valores);
   $cantidad_elementos = count($valores);
   $media = $suma/$cantidad_elementos;
   echo "<hr>";
   echo "- Suma total de elementos: $suma";
   echo "<br>";
   echo "- Numero de elementos en el array: $cantidad_elementos";
   echo "<br>";
   echo "<b>- Valor medio</b>: $media"


?>


</body>
</html>