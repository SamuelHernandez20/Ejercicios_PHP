<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>

 <b> 2. Revise la documentación oficial de PHP para ver qué información podemos obtener de la variable superglobal 
 $_SERVER. Escribe un script haciendo uso de la variable superglobal $_SERVER que muestre lo siguiente: </b> 

 <br> <br>

<?php 
   
 echo "Dirección ip donde se ejecuta el script: " . $_SERVER["HTTP_HOST"];
    echo "<br> <br>";
 echo "Nombre el Host donde se ejecuta el script: " . $_SERVER["SERVER_NAME"];
    echo "<br> <br>";
 echo "Software utilizado para servir el script: " . $_SERVER["SERVER_SOFTWARE"];
    echo "<br> <br>";
 echo "Información sobre el agente de usuario (User Agent): " . $_SERVER["HTTP_USER_AGENT"];
    echo "<br> <br>";
 echo "La dirección IP del cliente: " . $_SERVER["REMOTE_ADDR"];

 ?>


</body>
</html>






