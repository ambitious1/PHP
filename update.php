<?php
	require '../connect.inc.php';
	
	$per_page = 10;
	$pages_query = $link->query("SELECT COUNT('id') FROM people");
	$pages = ceil($pages_query->fetchColumn(0) / $per_page);
	
	$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
	$start = ($page - 1) * $per_page;
	
	$query = $link->query("SELECT * FROM `people` LIMIT $start, $per_page");
	
	echo "<table width=\"90%\" align=center border=2px>";
	echo "<tr><td width=\"2%\" align=center bgcolor=\"FFFF00\">ID</td>
	<td width=\"10%\" align=center bgcolor=\"FFFF00\">NAME</td>
	<td width=\"30%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
	<td width=\"40%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";
	
	while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];
	
		echo "<tr><td align=center>
		<a href =\"updateform.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id</a></td>
		<td>$name</td><td>$email</td><td>$password</td></tr>";	
	} 
	
	echo "</table>";
	
	$prev = $page - 1;
	$next = $page + 1;
	
	echo '<center>';
	
	if (!($page<=1)){
		echo "<a href='update.php?page=$prev'>Prev</a>    "; 
	}	
	
	if ($pages >= 1 && $page<=$pages) {
		for ($x=1;$x<=$pages; $x++) 
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong>' : '<strong><a href="?page='.$x.'">'.$x.'</a></strong>';				
	}
	
	
	if (!($page>=$pages)) {
		echo "    <a href='update.php?page=$next'>Next</a>";	
	}
	echo '</center>';
?>