<?php
require 'connect.inc.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

//checks if ip already exist in the database
function ip_exists($ip) {
	global $user_ip;
	$check_query = $GLOBALS['link']->prepare("SELECT `ip` FROM `hits_ip` WHERE `ip`='$user_ip'");
	$check_ip = $check_query->execute();//returns a boolean if it worked or not
	$check_num_rows = $check_query->fetchColumn();
	if($check_num_rows == 0){
		return false;
	} else if($check_num_rows > 0) {
		return true;	
	}
}

//if not then add
function ip_add($ip) {
	$ip_query = $GLOBALS['link']->prepare("INSERT INTO `hits_ip` VALUES ('$ip')");
	$ip_query_run = $ip_query->execute();
}


function update_count() {		
	$query = $GLOBALS['link']->query("SELECT `count` FROM `hits_count`");
	while (@$run = $query->fetch()){
		$count = $run['count'];	
	}
	
	echo $count_inc = $count + 1;
	
	$query_update = $GLOBALS['link']->prepare("UPDATE `hits_count` SET `count` = '$count_inc'");
	$query_update_run = $query_update->execute();
	
}

if (ip_exists($user_ip)){
	echo 'Exist Already';
} else {
	echo $user_ip.' Doesn\'t Exist, but will be added'; 
	update_count();	
	ip_add($user_ip);
}


?>