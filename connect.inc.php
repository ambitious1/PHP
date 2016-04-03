<?php
	//PDO Way	
	//Create a database in phpmadmin and replace with database name in the dbname field
	//Also if using a different host, username, or password just change the fields
	
	try {	
		$link = new PDO('mysql:host=localhost; dbname=...', 'root', '');
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
