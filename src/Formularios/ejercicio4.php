
<!DOCTYPE html>
<html>
<head>
    <title>Formularios - Ejercicio 4</title>
</head>
<body>

 <b> 
  1. Escribe un script que mediante un formulario permita seleccionar el número de monedas que se desean lanzar (de 1 a 20) y el tipo de moneda (Dólar Estadounidense, Euro, Yen japonés, Libra esterlina, Franco suizo)..
  </b> 

<hr>

<form action="" method="get">
    <label for="numero">Flip:</label>
    <input type="number" id="numero" name="numero" min="1" max="20">
    <br><br>

    <label for="text">virtual coin(s) of type:</label>
    <select name="select">
    <option value="" selected>Select a coin type...</option>
    <option value="Dolar">Dólar Estadounidense</option>
    <option value="Euro">Euro</option>
    <option value="Yen"> Yen japonés</option>
    <option value="Libra"> Libra esterlina</option>
    <option value="Franco"> Franco suizo</option>
   </select>

    <br><br>
    <button type="submit">Flip Coin(s)</button>
    <button type="reset">Reset Form</button>
</form>


<?php
echo "<br>";
echo "<br>";

$numero_lanzamientos = $_GET["numero"];
$tipo_moneda = $_GET["select"];


if($tipo_moneda == "Dolar"){
  for ($i = 1; $i <= $numero_lanzamientos; $i++) {
    $random=rand(0,1);
    echo "<img src='images2/Dolar/Dolar$random.jpg'>";
}   
}

elseif ($tipo_moneda == "Euro") {
    for ($i = 1; $i <= $numero_lanzamientos; $i++) {
        $random=rand(0,1);
        echo "<img src='images2/Euro/Euro$random.jpg'>";
    } 
}
elseif ($tipo_moneda == "Yen") {
    for ($i = 1; $i <= $numero_lanzamientos; $i++) {
        $random=rand(0,1);
        echo "<img src='images2/Yen/Yen$random.jpg'>";
    } 
}

elseif ($tipo_moneda == "Libra") {
    for ($i = 1; $i <= $numero_lanzamientos; $i++) {
        $random=rand(0,1);
        echo "<img src='images2/Libra/Libra$random.jpg'>";
    } 
}

elseif ($tipo_moneda == "Franco") {
    for ($i = 1; $i <= $numero_lanzamientos; $i++) {
        $random=rand(0,1);
        echo "<img src='images2/Franco/Franco$random.jpg'>";
    } 
}

?>

</body>
</html>