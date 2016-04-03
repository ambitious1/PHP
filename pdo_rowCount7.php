<?php

	require 'connect.inc.php';
	
	$query = $link->query("SELECT * FROM users");
	//echo '<pre>', print_r($query->fetch()), '</pre>'; //query->fetch(): This is only fetching the first record
	
	
	
	if ($query->rowCount()) {
		$x=1;
		while($r = $query->fetch(PDO::FETCH_OBJ)) {
			
			echo $x.'. '.$r->firstname, '<br>';
			$x+=1;
			
		}	
	} else{
		echo 'No Results';	
	}
	
?>