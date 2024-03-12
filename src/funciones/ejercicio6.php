<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 6</title>
</head>
<body>

 <b> 
  1. Escribe una función llamada calcular_minimo que reciba un array como parámetro de entrada y que devuelva cuál es el mínimo valor del array.
  </b> 

<hr>
<?php 
   function calcular_minimo ($Valores){

    $minimo = min($Valores);
    
    return $minimo;
   }
   
   $valores = array(1,4,6,9,10,34);
   $Min=calcular_minimo ($valores);
   echo "- <b>Valores del array: </b>";
   echo "<br>";
   echo "<br>";
   print_r($valores);
   echo "<br>";
   echo "<br>";
   echo "<b>- Valor minimo</b>: $Min";
 ?>


</body>
</html>