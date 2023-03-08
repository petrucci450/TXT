<?php

$prueba=fopen("archivo.txt","r") or die ("Error al leer");

while(!feof($prueba)){
$linea=fgets($prueba);

$saltodelinea=nl2br($linea);

echo $saltodelinea;

}

fclose($prueba);

?>