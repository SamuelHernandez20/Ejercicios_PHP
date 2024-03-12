
<!DOCTYPE html>
<html>
<head>
    <title>Formularios - Ejercicio 3</title>
</head>
<body>

 <b> 
  1. Escribe un script que muestre un formulario que permita introducir un número y mostrar su tabla de multiplicar.
  </b> 

<hr>

<form action="" method="get">
    <label for="numero">Introduzca un número:</label>
    <input type="number" id="numero" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php


$numero_ingresado = $_GET["numero"];
echo "<br>";

if (empty($numero_ingresado)){
echo "<b>Error</b>, debe de escoger un número";

}
else{

    echo "<table border='1'; width='520';>";
    echo "<caption> Tabla de multiplicar </caption>";
    
    for ($i = 1; $i <= 10; $i++) {
        $operacion = ($numero_ingresado*$i);
        echo "<tr>";
        echo "<td align='center'> $numero_ingresado x $i</td>";
        echo "<td align='center'> $operacion </td>";
        echo "</tr>";
    }
    
    echo "</table>";

}



?>

</body>
</html>