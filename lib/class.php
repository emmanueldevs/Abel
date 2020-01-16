<?php
/////////////////////////////////////////////////////////////
/// The main url display class| last updated on 03.20.2012
/////////////////////////////////////////////////////////////
include ("./includes/db.php");

$short = $_REQUEST['id'];

$conDB = mysqli_connect($db_host, $db_user, $db_pass,$db_server)or die('Error: Could not connect to MySQL database.');

$short = mysqli_real_escape_string($conDB, $short);

mysqli_query($conDB, "UPDATE sm_shorturl SET clicks=clicks+1 WHERE short='$short'");

$query = mysqli_query($conDB, "SELECT * FROM sm_shorturl WHERE short='$short' LIMIT 1");

$row = mysqli_fetch_row($query);
if (!empty($row)) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: " . $row[2] . "");
}  else {
	$error = "Link cannot be Found";
	$show = "<div class='notfound'>Link cannot be Found</div><p>Redirection to homepage in 5 seconds</p><script type='text/javascript'>
$(function() { $('body').fadeIn(3000, function() { $(this).delay(3500).fadeOut(2000, function() { window.location = './'; });});});</script>";
}
mysqli_close($conDB);
?>