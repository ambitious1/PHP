<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Username<input type="text" name="username"><br>
	Password<input type="password" name="password"><br>
	First Name<input type="text" name="firstname"><br>
	Last Name<input type="text" name="lastname"><br><br>
	Submit<input type="submit" name="submit">
</form>

<?php 
		
	require 'connect.inc.php';

		$check_array = array('username', 'password', 'firstname', 'lastname');

		function checkPosts($array) {
			if (!is_array($array)) 
				return "Error: Invalid Argument, it should be an array.";		
			
			foreach ($array as $post) {
				if (!isset($_POST[$post]) || $_POST[$post] == '')
					echo 'Invalid variable or All fields were not filled';
						return false;			
				} return true;
			}
			
			checkPosts($check_array);
			
			$uname = $_POST['username'];
			$pwd = $_POST['password'];
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
				
				
	$sql = "INSERT INTO users (username, password, firstname, surname) VALUES (:username, :password, :firstname, :surname)";
	//$link->query($sql); //This won't work because we're using a PDO environment and mysql functions were deprecated
	//Also the values are statically inputted to the insertion fields, what if we wanted the user
	//to enter those values through a form	
	$query = $link->prepare($sql);	
	
	$query->execute(array(
			':username'=> $uname,
			':password'=>$pwd,
			':firstname'=>$fname,
			':surname'=>$lname 	
	));
	
	echo $link->lastInsertId();
?>
