<?php
ob_start();
set_time_limit(0);
session_start();
include_once '../includes/db.php';
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res = mysqli_query($conDB, "SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow = mysqli_fetch_array($res);
    
$file_name = "data";

$select = "SELECT id,short,url,created_at,clicks FROM sm_shorturl";

$export = mysqli_query ($conDB, $select ) 
       or die('Error: Could not connect to MySQL database.');
$fields = mysqli_num_fields ( $export );

for ( $i = 0; $i < $fields; $i++ ) {
	$header .= mysqli_fetch_fields( $export , $i ) ."" ;
}

while( $row = mysqli_fetch_row( $export ) ) {
	$line = '';
	foreach( $row as $value ) {
		if ( ( !isset( $value ) ) || ( $value == "" ) ){
			$value = ",";
		}
		else {
			$value = str_replace( '"' , '""' , $value );
			$value = '"' . $value . '"' . ",";
		}
		$line .= $value;
	}
	$data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );


header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header( "Content-disposition: filename=".$file_name.".csv");
print "$header\n$data";
exit;
ob_flush();
?>