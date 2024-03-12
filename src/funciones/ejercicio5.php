<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 5</title>
</head>
<body>

 <b> 
  1.Escribe una función llamada calcular_maximo que reciba un array como parámetro de entrada y que devuelva cuál es el máximo valor del array.
  </b> 

<hr>
<?php 
   function calcular_maximo ($Valores){

    $maximo = max($Valores);
    
    return $maximo;
   }
   
   $valores = array(1,4,6,9,10,34);
   $Max=calcular_maximo ($valores);
   echo "- <b>Valores del array: </b>";
   echo "<br>";
   echo "<br>";
   print_r($valores);
   echo "<br>";
   echo "<br>";
   echo "<b>- Valor maximo</b>: $Max";
 ?>


</body>
</html>