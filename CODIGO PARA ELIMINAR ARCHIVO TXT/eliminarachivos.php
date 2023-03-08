<?php
$archi= $_REQUEST['archivo'];

unlink($archi);

echo "se elimino el archivo";


?>