<?php
	//PDO Way	

	try {	
		$link = new PDO('mysql:host=localhost; dbname=a_database', 'root', '');
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