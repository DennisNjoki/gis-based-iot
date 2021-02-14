<?php

$server = "sql105.epizy.com";
$username = "epiz_27834352";
$password = "ctDHFJ9XCAMuk";
$database = "epiz_27834352_iot";


/*Create database connection with correct username and password*/
$conn = new mysqli($server,$username,$password,$database);

/* Check the connection is created properly*/
if(!$conn){
	die("Could not connect to database!!:" .mysql_error());
}
?>
