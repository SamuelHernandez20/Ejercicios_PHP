<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 3</title>
</head>
<body>

 <b> 
  1. Escribe una función llamada inicializar_array que reciba tres parámetros llamados numero_de_elementos, min y max, 
  y que devuelva un array de números enteros comprendidos entre los valores min y max. 
  El número de elementos que contiene el array será el especificado en el parámetro de entrada numero_de_elementos:
  </b> 

<hr>
<?php 
   function inicializar_array ($numero_de_elementos,$min,$max){
    $Valores = array();

    //Funcion para definir el rango comprendido:
    $Min_Max=range($min,$max);

    // Bucle para definir el tamaño del array con números enteros:
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $Valores[]=$Min_Max;
    }
    return $Min_Max;
   }
   $longitud=10;
   $minimo=1;
   $maximo=11;
   $resultado=inicializar_array($longitud,$minimo,$maximo);

   for ($i = 0; $i < $longitud; $i++) {
     echo $resultado[$i];
     echo "<br>";
    }

 ?>

</body>
</html>