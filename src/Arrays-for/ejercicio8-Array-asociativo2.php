<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 8</title>
</head>
<body>

 <b> 
  1.Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El resultado deberá seguir el siguiente patrón:
  </b> 
<ul>
<li>La capital de ITALIA es ROMA</li>
</ul>
<hr>

<?php 

$Paises = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach ($Paises as $val => $key) {
    $valor = strtoupper($val);
    $clave = strtoupper($key);
    echo "<ul>";
    echo "<li>";
    echo "La capital de $valor es $clave\n";
    echo "</li>";
    echo "</ul>";
}












?>

</body>
</html>