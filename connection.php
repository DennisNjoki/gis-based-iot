<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "iot";

$dsn        = "mysql:host=$server;dbname=$database";

/*Create database connection with correct username and password*/
$conn = new mysqli($server,$username,$password,$database);

/* Check the connection is created properly*/
if(!$conn){
	die("Could not connect to database!!:" .mysql_error());
}
?>