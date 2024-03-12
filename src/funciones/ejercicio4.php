<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 4</title>
</head>
<body>

 <b> 
  1.Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.
  </b> 

<hr>
<?php 
   function calcular_media ($Valores){

    $cantidad_elementos = count($Valores);
    $suma = array_sum($Valores);
    $media = $suma/$cantidad_elementos;

    return $media;
   }
   
   $valores = array(1,4,6,9,10,34);
   $Media=calcular_media ($valores);
   echo "- <b>Valores del array: </b>";
   echo "<br>";
   echo "<br>";
   print_r($valores);
   echo "<br>";
   echo "<br>";
   echo "<b>- Valor medio</b>: $Media";
 ?>


</body>
</html>