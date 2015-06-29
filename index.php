<?php 
/*
El Frontend controller se encarga de 
configurar nuestra aplicacion
*/
require'config.php';
require'helpers.php';
//llamar a los controladores individuales
//index.php
if(empty($_GET['url']))
{
	require "controllers/home.php";
}
elseif($_GET['url'] == 'contactos')
{
	require "controllers/contactos.php";
}
else
{
	header("HTTP/1.0 404 Not Found");
	exit("Pagina no encontrada");
}
//index.php?url=contactos
//var_dump($_GET);
?>