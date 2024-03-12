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
   
   $valores = array();
   
   for ($i = 0; $i < 10; $i++ ) {
       $random = rand(1,30);
       echo $valores[]=$random;
       echo "<br>";
   }
   echo "<hr>";
   $minimo = min($valores);
   echo "<b>- Valor mínimo</b>: $minimo";


?>

</body>
</html>