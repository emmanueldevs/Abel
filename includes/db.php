<?php
///////////////////////////////////////////////
/// Database configuration options
///////////////////////////////////////////////
$db_host = 'localhost'; // enter database host. usually it is localhost.

$db_user = ''; // enter database username

$db_pass = ''; // enter database password

$db_server = ''; // enter database name

$conDB = mysqli_connect($db_host, $db_user, $db_pass,$db_server)or die('Error: Could not connect to MySQL database.');
$result = mysqli_query($conDB, "SELECT * FROM `sm_shorturl` WHERE `id` = '1'");
$row = mysqli_fetch_row($result);

///////////////////////////////////////////////
/// Error reporting and debug
///////////////////////////////////////////////
ini_set('display_errors', 0); // enter 1 to show errors and 0 to hide 
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . 'errors/error_log.txt');
error_reporting(E_ALL);
?> 