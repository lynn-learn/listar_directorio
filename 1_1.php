//listar directorio
<?php
$urlActual = getcwd();
echo $urlActual;
$url = $urlActual.'/mysql_resources';
$arrayArchivos = scandir($url);
print_r($arrayArchivos);
?>