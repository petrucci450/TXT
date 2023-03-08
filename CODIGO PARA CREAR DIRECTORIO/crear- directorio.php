<?php
$my_dir="hola";
if(!is_dir($my_dir)){
    mkdir($my_dir);
    echo "Se ha creado el directorio $my_dir";
}else{
    echo "El directorio $my_dir Ya existe! no lo vamos a crear de nuevo";
}


?>