<?php
	require 'Geo.php';
	
	$geo = new Geo();
	$userIP = '8.8.8.8';
	
	$geo->request($userIP);
	
	//echo "Looks like the you live in <em>{$geo->city}</em>!";
	echo $geo->city;
?>