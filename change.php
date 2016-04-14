<?php
	require '../connect.inc.php';
	
	$id = $_REQUEST['id'];
	$newname = $_REQUEST['newname'];
	$newemail = $_REQUEST['newemail'];
	$newpassword = $_REQUEST['newpassword'];
	
	$query = $link->query("UPDATE `people` SET `name`='$newname', `email`='$newemail', `password`='$newpassword'
	WHERE `id`='$id'");
	
	echo '<br>Your values have been updated successfully.<br>';	
	
	echo "<footer>
					<center>
						<a href=\"../home.php\">Home</a>
						<a href=\"../insert/form.php\">Register</a>
						<a href=\"../output/index.php\">See Data</a>
						<a href=\"../edit/update.php\">Edit</a>				
					</center>				
	<footer>";	
	
	
?>