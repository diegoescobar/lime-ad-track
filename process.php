<?php 

include('connect.php');

$_GET = array_map('mysql_real_escape_string', $_GET);
$_POST = array_map('mysql_real_escape_string', $_POST);
$_REQUEST = array_map('mysql_real_escape_string', $_REQUEST);
$clicked = "0";

if (isset($_GET['ad'])){
	$clicked = "1";
}

if (isset($_POST['ad'])){
	$clicked = "0";
}

$day = date("Y-m-d");
$time = date('H:i:s');

if (!empty($_REQUEST['ad'])){

if (!isset($_REQUEST['id']) ||  empty($_REQUEST['id'])){
$sql = "INSERT INTO  `ad_clicks`  (ip, ad_id, viewed, blocked, clicked)
VALUES ('".$_REQUEST['ip']."', '".$_REQUEST['ad']."',  '".$_REQUEST['view']."', '".$_REQUEST['blocked']."', '".$clicked."')";
	if (mysql_query($sql, $conn)) {
		//echo "New record created successfully";
		$id = mysql_insert_id( $conn );
		echo $id;
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($conn);
	}
}else{
	$sql = "UPDATE `ad_clicks` SET clicked = '1', click_date = '".$day.' '. $time."' WHERE id = '".$_REQUEST['id']."'";
	if (mysql_query($sql, $conn)) {
		echo "updated successfully";
		
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($conn);
	}
	echo '<br>' . $sql;
}


if ($clicked == "1"){
	$sql = "SELECT target FROM ads WHERE id = '{$_REQUEST['ad']}' LIMIT 1";
	$results = mysql_query($sql, $conn);
	
	while ( $row = mysql_fetch_array( $results, MYSQLI_ASSOC )  ) {
	
		header('location: '. $row['target'] );
	
	}
	
	
}

}

mysql_close($conn);

?>