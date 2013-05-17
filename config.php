<?php

// Database Constants
define("DB_SERVER", "localhost");
define("DB_USER", "lastcall_app");
define("DB_PASS", "nmix123");
define("DB_NAME", "lastcall_app");
define("CPANEL_USERNAME", "lastcall");


// 1. Create a database connection
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}

//Twilio User Information
	$sid = 'AC086ac952e721bdd290ad5edf0d7fddcd';
	$token = 'ea4016c87485b603e3473f4c67abfb6d';
	$phonenumber = '7065210219';
	
//Application BaseURL: 
$baseurl = "http://lastcall.mynmi.net";	

?>