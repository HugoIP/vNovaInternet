<?php 
//This is only a controller NO HTML here, only php
$titulo="Mi first php";
$contenido="The php content";

//call function
// Use compact to create array only using key
view("home",compact('titulo','contenido'));
?>