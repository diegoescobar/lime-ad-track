<?php 


//Testing
/*
define("DB_HOST", "localhost");
define("DB_NAME", "development");
define("DB_USER", "root");
define("DB_PASS", "");
*/


//live 
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "limeadve_adserver");
define("DB_USER", "limeadve_ads");
define("DB_PASS", "!2D_j_Fh9=5cy:D");



/// Create connection
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysql_error());
}


$db = mysql_select_db( DB_NAME, $conn);
?>


