<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 7</title>
</head>
<body>

 <b> 
  1. Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre su contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la segunda el valor que hay en esa posición.
  </b> 

<hr>
<?php 
   function imprimir_array ($valores){
    $cantidad_elementos = count($valores);

    echo "<table border='1'; width='520';>";
    echo "<caption> Valores del array en 2 columnas </caption>";
    
    for ($i = 0; $i < $cantidad_elementos; $i++) {
        echo "<tr>";
        echo "<td align='center' title='valor'>$i</td>";
        echo "<td align='center'>$valores[$i]</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
   }
   $valores = array(1,4,6,9,45,34);
   imprimir_array ($valores);
  
 ?>


</body>
</html>