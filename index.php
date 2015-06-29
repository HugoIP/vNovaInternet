<?php 
/*
El Frontend controller se encarga de 
configurar nuestra aplicacion
*/
require'config.php';
require'helpers.php';
//llamar al controlador de acuerdo a la url
if(empty($_GET['url']))
{
	$_GET['url']="home";
}
controller($_GET['url']);
?>