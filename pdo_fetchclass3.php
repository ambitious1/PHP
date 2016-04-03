require 'connect.inc.php';
	require 'connect.inc.php';
	<?php

	require "connect.inc.php";
	
	
	class FoodFacts {
		public $food, $calories, $healthy_unhealthy,
				 $description;
		//feeds have to be the same names as the structures in the database or else new rows are going to be made
				 
		//to fill in the empty description field, build a constructor
		public function __construct() {
			$part1 = "{$this->food} is {$this->calories} calories also it is ";
			if ($this->healthy_unhealthy == 'h') {
				$part2 = "healthy for you.";			
			}	else {
					$part2 = "unhealthy, so stay away.";			
			}	
			
			$this->description = $part1.$part2; 
		} 		 	
	}

	$query = $link->query("SELECT * FROM `food`");
	//$query_run = mysql_query($query, $link);
	$query->setFetchMode(PDO::FETCH_CLASS, 'FoodFacts');

	while ($x = $query->fetch()) { 
		echo '<pre>', print_r($x) ,'</pre><br>';
	}
		
?>