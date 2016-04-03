<?php
	require 'connect.inc.php';
	

	//PDO Way	

	try {	
		$link = new PDO('mysql:host=localhost; dbname=a_database', 'root', '');
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		echo 'Connected<br><br>';		
		}
	catch(PDOException $e){
		echo $e->getMessage();
		die();	
	}
	
	$query = $link->query("SELECT * FROM users");
	
	while($r = $query->fetch()) {
		echo '<em>',$r['username'],'</em><br>******************<br>'; //shows names in a regular format		
		echo '<strong><pre>',print_r($r['username']),'</strong><br>~~~~~~~~~~~~~~~~~</pre><br>'; //only shows the usernames in an assoc array
		echo '<pre>',print_r($r),'</pre>'; //Prints all data in the users table
	}

	
?>