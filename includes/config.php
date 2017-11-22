<?php 
session_start();
date_default_timezone_set('America/New_York');

function __autoload($class)
{
	$class = strtolower($class);
	$classPath = "classes/" . $class . ".php";

	if (file_exists($classPath)) {
		require $classPath;
	}
	$classPath = "../classes/" . $class . ".php";
	if (file_exists($classPath)) {
		require $classPath;
	}
	$classPath = "../../classes/" . $class . ".php";
	if (file_exists($classPath)) {
		require $classPath;
	}
}
?>