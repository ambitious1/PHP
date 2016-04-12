<?php

require 'connect.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name && $email && $password) {
	$query = $link->query("INSERT INTO people(name,email,password) VALUES ('$name', '$email','$password')");
	//$query_run = $query->execute();
	while($registered = $query->fetchAll()){
	if($registered){
		echo '<pre>', print_r($registered), '</pre>';
		echo 'You must complete the form';
	} else {
		} 
	}
}
?>