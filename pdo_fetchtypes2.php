<?php

	require 'connect.inc.php';
	
	$query = $link->query("SELECT `food`, `calories` FROM `food` ORDER BY `id` DESC");
//$query_run = mysql_query($query, $link);


	/*while ($x = $query->fetch()) { 
		$food = $x['food'];
		$calories = $x['calories'];
		
		echo $food.' has '.$calories.' calories.<br>';
	}*/
		
	//Fetch Data in an Associative Array same as mysql_fetch_assoc())	
	/*$r = $query->fetch(PDO::FETCH_ASSOC);
	echo '<pre>', print_r($r), '</pre><br><br>';
	*/
	
	
	//Fetch the Data by ID
	/*while($t = $query->fetch(PDO::FETCH_NUM)) {
		echo '<pre>', print_r($t), '</pre>';
	}*/

	//Fetch Data by making the query into an object	
	while($y = $query->fetch(PDO::FETCH_OBJ)) {
		echo $y->food, ' has ', $y->calories,'<br>';	
	}
	

?>