<html>
	<head>
		<body>
			<h2>
				Register Form			
			</h2>	
			
			<form method="post" action="../insert/insert.php">
				<table border="0" width="60%">
					<tr><td width="10%">Name: </td><td><input type="text" name="name" ></td></tr>
					<tr><td width="10%">Email: </td><td><input type="text" name="email" ></td></tr>
					<tr><td width="10%">Password: </td><td><input type="password" name="password" ></td></tr>
				</table>
				
				<input type="submit" value="Register"><br>				
				
			</form>
			
			<a href="output.php">See Data</a>	
			<footer>
					<center>
						<?php include("../links.php"); ?>					
					</center>				
			<footer>			
		</body>	
	</head>
</html>