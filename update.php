<?php
	require '../connect.inc.php';
	
	$result = $link->query("SELECT * FROM people");
	
	echo "<table width=\"90%\" align=center border=2px>";
	echo "<tr><td width=\"2%\" align=center bgcolor=\"FFFF00\">ID</td>
	<td width=\"10%\" align=center bgcolor=\"FFFF00\">NAME</td>
	<td width=\"30%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
	<td width=\"40%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";
	
	while ($row=$result->fetch()){
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];
	
		echo "<tr><td align=center>
		<a href =\"updateform.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id</a></td>
		<td>$name</td><td>$email</td><td>$password</td></tr>";	
	} 
	
	echo "</table>";
?>