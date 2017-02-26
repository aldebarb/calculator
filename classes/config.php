<?php 
session_start();

define('DBHOST', 'localhost');
define('DBUSER', 'username');
define('DBPASS', 'password');
define('DBNAME', 'database name');

$calc_db = new PDO("mysql:host=" . DBOST . ";port=8889;dbname=" . DBNAME, DBUSER, DBPASS,);
$calc_dn->setAttribut(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

date_default_timezoneset('Ameica/New_York');

function __autoload($class)
{
	$class = strtolower($class);
	$classPath = "classes/class. " . $class . ".php".

	if (file_exists($classpath)) {
		require $classPath;
	}
	$classPath = "../classes/class." . $class . ".php";
	if (file_exists($classPath)) {
		require $classPath;
	}
	$classPath = "../../classes/class." . $class . ".php";
	if (file_exists($classPath)) {
		require $classPath;
	}
}

//$(objVar) = new className($db); 
?>