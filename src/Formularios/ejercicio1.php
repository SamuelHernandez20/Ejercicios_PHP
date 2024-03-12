<!DOCTYPE html>
<html>
<head>
    <title>Formularios - Ejercicio 1</title>
</head>
<body>

 <b> 
  1.Escribe un script que muestre un formulario con un campo de texto y que permita enviarlo usando el método GET. 
   El mismo script será capaz de recibir el dato enviado por el formulario y lo mostrará.
  </b> 

<hr>

<form action="" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <button type="submit">Enviar</button>
</form>
<?php


$nombre_ingresado = $_GET["nombre"];

echo "<br>";

if ( empty($nombre_ingresado)){
    echo "<b>Error</b>, no puede dejar el campo como cadena vacía, introduzca su nombre.";
}
else {
   echo $nombre_ingresado;
}

?>

</body>
</html>

