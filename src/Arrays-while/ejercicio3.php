</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 3</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que realice las siguientes acciones:
  </b> 
<ul>
<li>Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.</li>
<li>Una vez que ha inicializado el array, imprima todos los valores que almacena.</li>
<li>Buscar el valor máximo de los valores del array.</li>
<li>Muestre el valor máximo que ha encontrado.</li>
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
   echo "<hr>";
   $maximo = max($valores);
   echo "<b>- Valor máximo</b>: $maximo";


?>

</body>
</html>
