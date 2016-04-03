<?php

	require 'connect.inc.php';
	
	$query = $link->query("SELECT * FROM users");
	//echo '<pre>', print_r($query->fetch()), '</pre>'; //query->fetch(): This is only fetching the first record
	
	$results = $query->fetchAll(PDO::FETCH_ASSOC);
	
	if (count($results)) {
		echo 'There are results.';
	} else {
		echo 'There are no results.';
	} 
	
	echo '<pre>', print_r($results), '</pre>';	
	
?>