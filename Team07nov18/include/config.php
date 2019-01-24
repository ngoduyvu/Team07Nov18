<?php
//define constants for connection info
define("MYSQLUSER","team07nov18");
define("MYSQLPASS","Passwork2");
define("HOSTNAME","localhost");
define("MYSQLDB","team07nov18_db");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>


