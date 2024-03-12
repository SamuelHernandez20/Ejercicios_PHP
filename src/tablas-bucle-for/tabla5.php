<?php

echo "<table border='1'; width='520';>";
echo "<caption> Tabla de multiplicar del 1 al 10 </caption>";

for ($i = 1; $i <= 10; $i++) {
    $operacion = ($i*$i);
    echo "<tr>";
    echo "<td align='center'> $i x $i</td>";
    echo "<td align='center'> $operacion </td>";
    echo "</tr>";
}

echo "</table>";



?>