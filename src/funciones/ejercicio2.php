<!DOCTYPE html>
<html>
<head>
    <title>Funciones - Ejercicio 2</title>
</head>
<body>

 <b> 
  1. Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima las tablas de multiplicar entre esos dos números. Utilice la función del ejercicio anterior:
  </b> 

<hr>
<?php 
   function Tabla_multiplicar_inicio_fin($num,$inicio,$fin){

    echo "<table border='1'; width='520';>";
    echo "<caption> Tabla de multiplicar </caption>";  
    for ($i = $inicio; $i <= $fin; $i++) {
        $operacion = ($num*$i);
        echo "<tr>";
        echo "<td align='center'> $num x $i</td>";
        echo "<td align='center'> $operacion </td>";
        echo "</tr>";
    }
    echo "</table>";
   }
   $Inicio=3;
   $Fin=4;
   $Numero=7;
   Tabla_multiplicar_inicio_fin($Numero,$Inicio,$Fin);


 ?>


</body>
</html>