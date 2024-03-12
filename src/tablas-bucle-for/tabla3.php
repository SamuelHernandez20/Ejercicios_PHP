<?php

echo "<table border='1'>";
echo "<caption> Numeros pares </caption>";
echo "<tr>";

for ($i = 1; $i <= 100; $i++) { 
 $residuo=$i%2;

  if($residuo == 0){
    echo "<td> $i </td>";
}

}
echo "</tr>";
echo "</table>";

?>
