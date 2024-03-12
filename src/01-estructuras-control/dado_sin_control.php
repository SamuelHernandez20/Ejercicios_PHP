<?php


$i = rand(0,5);
$imagenes = ['images/dado1.jpg','images/dado2.jpg','images/dado3.jpg','images/dado4.jpg','images/dado5.jpg','images/dado6.jpg'];
echo '<img src="'.$imagenes[$i].'">';


# - Segunda forma:

#$dado = rand(1,6);
#echo '<"img src='images/dado'".$dado."'">';



?>

