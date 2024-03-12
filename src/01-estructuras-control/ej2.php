<?php

$valor = rand(0,10);

echo "Valor aleatorio: $valor ";

if ($valor >= 0 and $valor <5) {
    echo "Insuficiente";

} elseif ($valor >= 5 and $valor <6) { 
    echo "Suficiente";

 } elseif ($valor >= 6 and $valor <7) { 
        echo "Bien";

} elseif ($valor >= 7 and $valor <9) { 
    echo "Notable";

}

 elseif ($valor >= 9 and $valor <=10) { 
    echo "Sobresaliente";

}


?>