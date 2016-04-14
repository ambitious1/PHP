<?php

require '../connect.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$username = $link->query("SELECT `name` FROM `people` WHERE `name`='$name'");
$count = $username->rowCount($username);

if ($count!=0){
	
	echo "<p>
				<a href=\"../home.php\">Home</a>&nbsp
				<a href=\"form.php\">Register</a>&nbsp
				<a href=\"../edit/update.php\">Edit User</a>&nbsp
				<a href=\"../output/index.php\">See Data</a>&nbsp
				<a href=\"delete.php\">Delete User</a>&nbsp
			</p>";
				
	die("<b>ERROR: Name already exists! Please type another name</b>");
	
}


if($name && $email && $password) {
	$query = $link->query("INSERT INTO people(name,email,password) VALUES ('$name', '$email','$password')");
	
	echo "You have successfully registered!";
		
	while($registered = $query->fetchAll()){
	if($registered){
		echo '<pre>', print_r($registered), '</pre>';	
	} else {
			echo 'You must complete the form';
		} 
	}
}
?>