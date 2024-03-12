<?php 

include 'funciones.php';

echo "<h2>- Llamada a la primera función: </h2>";

$Numero=7;
Tabla_multiplicar($Numero);


echo "<h2>- Llamada a la segunda función: </h2>";

$Inicio=3;
$Fin=4;
$Numero=7;
Tabla_multiplicar_inicio_fin($Numero,$Inicio,$Fin);

echo "<h2>- Llamada a la tercera función: </h2>";

$longitud=10;
$minimo=1;
$maximo=11;
$resultado=inicializar_array($longitud,$minimo,$maximo);

   for ($i = 0; $i < $longitud; $i++) {
     echo $resultado[$i];
     echo "<br>";
    }

echo "<h2>- Llamada a la cuarta función: </h2>";

$valores = array(1,4,6,9,10,34);
$Media=calcular_media ($valores);
echo "- <b>Valores del array: </b>";
echo "<br>";
echo "<br>";
print_r($valores);
echo "<br>";
echo "<br>";
echo "<b>- Valor medio</b>: $Media";

echo "<h2>- Llamada a la quinta función: </h2>";

$valores = array(1,4,6,9,10,34);
$Max=calcular_maximo ($valores);
echo "- <b>Valores del array: </b>";
echo "<br>";
echo "<br>";
print_r($valores);
echo "<br>";
echo "<br>";
echo "<b>- Valor maximo</b>: $Max";

echo "<h2>- Llamada a la sexta función: </h2>";

$valores = array(1,4,6,9,10,34);
$Min=calcular_minimo ($valores);
echo "- <b>Valores del array: </b>";
echo "<br>";
echo "<br>";
print_r($valores);
echo "<br>";
echo "<br>";
echo "<b>- Valor minimo</b>: $Min";

echo "<h2>- Llamada a la séptima función: </h2>";

$valores = array(1,4,6,9,45,34);
imprimir_array ($valores);



?>