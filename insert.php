<?php

require '../connect.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$footer = "<center>
					<a href=\"../home.php\">Home</a>&nbsp
					<a href=\"form.php\">Register</a>&nbsp
					<a href=\"../edit/update.php\">Edit User</a>&nbsp
					<a href=\"../output/index.php\">See Data</a>&nbsp
					<a href=\"delete.php\">Delete User</a>&nbsp
				</center>";
				

if($name && $email && $password && $cpassword) {
	
	if ($password == $cpassword){	
	
	$username = $link->query("SELECT `name` FROM `people` WHERE `name`='$name'");
	$count = $username->rowCount($username);

		if ($count!=0){
	
		echo $footer;
		die('<b>ERROR: Name already exists! Please type another name</b>');
	
		}
	
	
	$query = $link->query("INSERT INTO people(name,email,password) VALUES ('$name', '$email','$password')");
	
	echo 'You have successfully registered!';
		
	while($registered = $query->fetchAll()){
	if($registered){
		echo '<pre>', print_r($registered), '</pre>';	
		} 
	
	} 
	
} else{
		echo 'Your passwords don\'t match';
		echo $footer;
	}
	
} else {
			echo 'You must complete the form';
			echo $footer;
	} 
	
?>