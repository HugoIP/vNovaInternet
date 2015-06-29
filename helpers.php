<?php 
//create function
//To reuse, use a parmeter to page, and nex an array for parameter list
function view($template,$vars = array())
{
	extract($vars);
	require "views/$template.tpl.php";
}
?>