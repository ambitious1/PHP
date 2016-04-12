<?php
	require 'connect.inc.php';
	
	$result = $link->query("SELECT * FROM people");
	
	while($row = $result->fetch()) {
		$n_row = $row['name'];
		$e_row = $row['email'];
		$p_row = $row['password'];
		
		echo $n_row.' '.$e_row.' '.$p_row.'<br><br>';
		echo '<br>';
		
	}

?>