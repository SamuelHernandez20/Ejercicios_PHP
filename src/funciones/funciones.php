<?php 

 // Ejercicio 1:

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
 
 // Ejercicio 2:

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
  

 // Ejercicio 3:

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
  
  // Ejercicio 4:

  function calcular_media ($Valores){

    $cantidad_elementos = count($Valores);
    $suma = array_sum($Valores);
    $media = $suma/$cantidad_elementos;

    return $media;
   }
   

  // Ejercicio 5:

  function calcular_maximo ($Valores){

    $maximo = max($Valores);
    
    return $maximo;
   }
   
 // Ejercicio 6:

 function calcular_minimo ($Valores){

    $minimo = min($Valores);
    
    return $minimo;
   }
   
 // Ejercicio 7:

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
   




 ?>