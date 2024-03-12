
<!DOCTYPE html>
<html>
<head>
    <title>Arrays - Ejercicio 6</title>
</head>
<body>

 <b> 
  1. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
  </b> 
<ul>
<li>Mostrar el listado ordenado de mayor a menor.</li>
<li>Mostrar el listado ordenado de menor a mayor.</li>
</ul>
<p>
El array de temperaturas lo vamos a generar con números aleatorios. 
El número de elementos del array será especificado mediante un formulario y los valores aletorios generados estarán entre 1 y 30.
</p>
<hr>

<form action="" method="post">
    <label for="numero">Ingrese un número para definir el numero de elementos:</label>
    <input type="number" id="numero" name="numero" min="0">
    <button type="submit">Enviar</button>
</form>
<?php


$numero_ingresado = $_POST["numero"];

echo "<br>";

if ( empty($numero_ingresado)){

    echo "<b>Error</b>, debe de asignar una cifra para definir el número de elementos del array.";
}

else {

    for ($i = 0; $i < $numero_ingresado; $i++ ) {
        $random = rand(1,30);
        $valores_temp[]=$random;
        echo $random . "°C";
        echo "<br>";
    }
    echo "<br>";

    echo "- Ordenación de mayor a menor:";
    echo "<br>";
    rsort($valores_temp);

    foreach ($valores_temp as $valor) {
      echo "<br>";
      echo $valor . "°C";
    }

    echo "<br>";
    echo "- Ordenación de mayor a menor:";
    echo "<br>";
    sort($valores_temp);

    
    foreach ($valores_temp as $valor2) {
     echo "<br>";
     echo $valor2 . "°C";

    }
  
}

?>

</body>
</html>

