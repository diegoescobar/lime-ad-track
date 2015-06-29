<?php 

function get_click_stats(){
	global $conn;
	$sql = "SELECT COUNT( clicked ) AS clicks, clicked, DAY( ad_clicks.`timestamp` ) AS  `day` , MONTH( ad_clicks.`timestamp` ) AS  `month` , YEAR( ad_clicks.`timestamp` ) AS  `year`
	FROM ad_clicks
	GROUP BY DAY , clicked
	LIMIT 0 , 30
	";
	$results = mysqli_query($conn, $sql);
	
	while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
			
		var_dump( $row );
	
	}
	
}

function get_clicks(){
global $conn;
$sql = "SELECT * FROM ad_clicks WHERE clicked = '1' GROUP BY ad_id";
	$results = mysqli_query($conn, $sql);
	
	while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
			
		var_dump( $row );
		
	}
}


function get_no_clicks(){

	$sql = "SELECT * FROM ad_clicks WHERE clicked = '0' GROUP BY ad_id";
	$results = mysqli_query($conn, $sql);
	
	while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
			
		var_dump( $row );
		
	}
}


function get_ad_results($id){

	if (!empty($id)){
		$sql = "SELECT * FROM ad_clicks WHERE ad_id = '{$id}'";
		$results = mysqli_query($conn, $sql);
	
		while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
				
			var_dump( $row );

		}
	}else{
		return false;
	}
}


function get_ad_clicks($id){
	if (!empty($id)){
		$sql = "SELECT COUNT( clicked )
		FROM ad_clicks
		WHERE ad_id = {$id}
		AND clicks = '1'";
				
		while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
				
			var_dump( $row );
		
		}
	}else{
		return false;
	}
}

/*
function get_ad_clicks($id){
	if (!empty($id)){
		$sql = "SELECT COUNT( clicked )
		FROM ad_clicks
		WHERE ad_id = {$id}
		AND clicks = '1'";
		
		while ( $row = mysqli_fetch_array( $results, MYSQLI_ASSOC )  ) {
		
			var_dump( $row );
		
		}
	}else{
		return false;
	}
	
}*/


//SELECT * by ad_id
//SELECT * by date
//SELECT * from date range
//ORDER BY


function fate(){
	return "oooOOOOooooOOOoooo";
}


function new_ad($name){
	if (!empty($name)){
		$sql = "INSERT INTO ads SET name = '{$name}'";
		
		$results = mysqli_query($conn, $sql);
		
		$id = mysqli_insert_id( $conn );
		
		return $id;
	}else{
		return false;
	}
	
}

function login(){
	
	
}

function logout(){
	session_destroy();
}