<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 1</title>
</head>
<body>

 <b> 
  1. Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar:
  </b> 

<hr>
<?php 
   function Tabla_multiplicar($num){

    echo "<table border='1'; width='520';>";
    echo "<caption> Tabla de multiplicar </caption>";  
    for ($i = 1; $i <= 10; $i++) {
        $operacion = ($num*$i);
        echo "<tr>";
        echo "<td align='center'> $num x $i</td>";
        echo "<td align='center'> $operacion </td>";
        echo "</tr>";
    }
    echo "</table>";
   }
   $Numero=7;
   Tabla_multiplicar($Numero);


 ?>


</body>
</html>