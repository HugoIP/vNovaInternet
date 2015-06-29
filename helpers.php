<?php 
//create function
//To reuse, use a parmeter to page, and nex an array for parameter list
function view($template,$vars = array())
{
	extract($vars);
	require "views/$template.tpl.php";
}
function controller($name)
{
	$file = "controllers/$name.php";
	//exit($file);   //Breakpoint
	if(file_exists($file))
	{
		require $file;
	}
	else
	{
		//TODO: Create a controller for this case
		header("HTML/1.0 404 Not Found");
		exit("Pagina no encontrada");
	}
}
?>