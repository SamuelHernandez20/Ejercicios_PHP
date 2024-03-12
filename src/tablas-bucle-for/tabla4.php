<?php

$num = rand(1,10);
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


?>