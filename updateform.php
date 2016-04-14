<html>
	<head>
			<title>Update User</title>
	</head>
	<body>
		<h3>
			Update User: <?php echo $_REQUEST['names']; ?>		
		</h3>	
		
		<form method="POST" action="change.php">
			<table border="0" width="20%">
				<tr><td width="30%">Name: </td><td><input type="text" name="newname" 
				value="<?php echo $_REQUEST['names']; ?>"> </td></tr>
				<tr><td width="30%">Email: </td><td><input type="text" name="newemail" 
				value="<?php echo $_REQUEST['emails']; ?>"> </td></tr>
				<tr><td width="30%">Password: </td><td><input type="text" name="newpassword" 
				value="<?php echo $_REQUEST['passwords']; ?>"> </td></tr>
				</table>
				<input type="submit" value="Save & Update" /><br><br><br>
				<input type="hidden" name="id" value="<?php echo $_REQUEST['ids']; ?>">
				
			
		</form>
	</body>
</html>