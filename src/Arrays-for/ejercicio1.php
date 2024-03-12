<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 1</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que realice las siguientes acciones:
  </b> 
<ul>
<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>
<li>Una vez que ha inicializado el array, imprimir todos los valores que almacena.</li>
</ul>
<hr>
<?php 
   
   $valores = array();

   echo "<br>";
   for ($i = 0; $i < 10; $i++ ) {
       $random = rand(1,30);
       echo $valores[]=$random;
       echo "<br>";

   }

 ?>


</body>
</html>