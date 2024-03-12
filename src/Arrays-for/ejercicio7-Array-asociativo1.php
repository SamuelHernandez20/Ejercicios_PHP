
<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 7</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que permita ordenar el siguiente array asociativo:
  </b> 
<ul>
<li>De forma ascendente ordenado por valor.</li>
<li>De forma ascendente ordenado por clave.</li>
<li>De forma descendente ordenado por valor.</li>
<li>De forma descendente ordenado por clave.</li>
</ul>
<hr>

<?php

echo "<b>Array sin ninguna ordenación: </b>";
// Esto es un bucle asociativo donde a cada elemento del array se le asocia un valor:
$Nombres = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
print_r($Nombres);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<b>Ordenación del valor de forma ascendente:</b>";
echo "<br>";
echo "<br>";
asort($Nombres);

foreach ($Nombres as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>";
echo "<br>";
echo "<b>Ordenación del valor de forma descendente:</b>";
echo "<br>";
echo "<br>";
arsort($Nombres);

foreach ($Nombres as $key2 => $val2) {
    echo "$key2 = $val2\n";
}

echo "<br>";
echo "<br>";
echo "<b>Ordenación de clave de forma ascendente:</b>";
echo "<br>";
echo "<br>";
ksort($Nombres);

foreach ($Nombres as $key3 => $val3) {
    echo "$key3 = $val3\n";
}

echo "<br>";
echo "<br>";
echo "<b>Ordenación de clave de forma descendente:</b>";
echo "<br>";
echo "<br>";
krsort($Nombres);

foreach ($Nombres as $key4 => $val4) {
    echo "$key4 = $val4\n";
}

?>


</body>
</html>











