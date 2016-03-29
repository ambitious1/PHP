<?php

//Md5 is a one way encryption method in which once encrypted it can not be reverse to it's original form
	/*$string = 'password';
	$string_hash = md5($string);
	
	echo $string_hash.'<br><br>';
	*/
	
	
	if (isset($_POST['pass']) && !empty($_POST['pass'])) {
		$orig_password = $_POST['pass'];
		$user_password = md5($orig_password); //This converts the user's input immediately to the md5 hash
		echo 'The text "'.$orig_password.'" was converted to '.$user_password;		
		
		$filename = 'words.txt';
		$method = (file_exists($filename)) ? 'a' : 'w';
		$handle = fopen($filename, $method);
		fwrite($handle, $user_password."\n");
		fclose($handle);
		
		echo '<br><br>Text was written to '.$filename.'<br>';		
		
		echo '<br>List of Words in '.$filename.'<br>----------------------<br>';
		
		$readfile = fopen($filename, "r") or die('file doesn\'t exist or doesn\'t have permissions to be read.');
		while(!feof($readfile))
  		{
  			echo fgets($readfile)."<br>";
  		}
		fclose($readfile);				
				
		echo '<br><br>';		
		} else {
		echo 'Please enter a password!!';	
	}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Password to be Converted: <input type="text" name="pass"><br><br>
	<input type="submit" value="Submit Password">
</form>
