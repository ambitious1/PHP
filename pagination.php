<?php
	require '../connect.inc.php';
	
	$per_page = 6;
	$pages_query = $link->query("SELECT COUNT('id') FROM people");
	$pages = ceil($pages_query->fetchColumn(0) / $per_page);
	
	$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
	$start = ($page - 1) * $per_page;
	
	$query = $link->query("SELECT `name` FROM `people` LIMIT '$start', '$per_page'");
	
	while ($query_row = $query->fetch(PDO::FETCH_ASSOC)) {
		echo '<p>', $query_row['name'], '</p>';
	}
	
	$prev = $page - 1;
	$next = $page + 1;
	
	
	if (!($page<=1)){
		echo "<a href='pagination.php?page=$prev'>Prev</a>"; 
	}	
	
	if ($pages >= 1 && $page<=$pages) {
		for ($x=1;$x<=$pages; $x++) 
			echo ($x == $page) ? '<strong><a href="?page='.$x.'">'.$x.'</a></strong>' : '<strong><a href="?page='.$x.'">'.$x.'</a></strong>';				
	}
	
	echo '<br>';
	
	if (!($page>=$pages)) {
		echo "<a href='pagination.php?page=$next'>Next</a>";	
	}
?>
?>