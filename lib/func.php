<?php
///////////////////////////////////////////////
/// The main url shortener class
///////////////////////////////////////////////
include ("./includes/db.php");
$time = date("U");

$url = $_REQUEST['url'];
if (! preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_+#@;!.-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url)){
	$show = "Invalid Link";
	}else{
  $conDB = mysqli_connect($db_host, $db_user, $db_pass,$db_server)or die('Error: Could not connect to MySQL database.');
	$short = substr(md5(time() . $url) , 0, $link_length);
	if (mysqli_query($conDB, "INSERT INTO `" . $db_server . "`.`sm_shorturl` (`short`, `url`) VALUES ('" . $short . "', '" . $url . "');")){
			$show = "$webpath/" . $short;
			$show_array = array(
				'timestamp' => $time,
				'url' => $show
			);

		$show_item = json_encode($show_array);
		//$show = "$webpath/" . $short;
	}else{
		$html = "Error connecting Database";
	}
	mysqli_close($conDB);
}
?>