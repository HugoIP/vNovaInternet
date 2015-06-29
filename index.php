<?php 
/*
El Frontend controller se encarga de 
configurar nuestra aplicacion
*/
require'config.php';
require'helpers.php';
//llamar a los controladores individuales
if(empty($_GET['url']))
{
	$_GET['url']="home";
}
controller($_GET['url']);
?>