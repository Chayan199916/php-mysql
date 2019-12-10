<?php
/*
this file contains database configuration assuming you are running mysql using user "root" and password ""
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'LogIn');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn == false)
{
	dir('Error: Can not connect');
}

?>