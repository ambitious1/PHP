<?php
	
	$dbname = 'social_users';
	$dbusername = 'root';
	$dbpassword = '';
	
	try {	
		$link = new PDO("mysql:host=localhost; dbname=$dbname", $dbusername, $dbpassword);
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			
		ob_start();		
		echo 'Connected<br><br>';
		ob_end_clean();		
		}
	catch(PDOException $e){
		echo $e->getMessage();		
		die();	
	}
	
?>