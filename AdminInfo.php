<?php	
	session_start();
	if(!isset($_SESSION['id']))
	{  
		header("location: Login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Information</title>
</head>
<body style="background-color: DarkGray">
    <center>

        <table border=1>
		 
			<tr>
		    	<td colspan=3><center><b>Admin Information</b></center></td>
		 	</tr>
		 
		 	<tr>
			    <td>ID</td>
				<td>Name</td>
				<td>Password</td>
		 	</tr>
		 
		 	<tr>
			    <td><?= $_SESSION['id']?></td>
				<td><?= $_SESSION['name']?></td>
				<td><?= $_SESSION['pwd']?></td>

		 	</tr>

			<tr>
			    <td colspan=3>
			    	<center>
				    	<input type="submit" name="submit13" value="Update">
					    <input type="submit" name="submit14" value="Delete"> 
						<input type="submit" name="submit15" value="View">
					</center>
				</td>
			<tr>
				<td colspan=3><center><a href='Home.php'>Back</a></center></td>
			</tr>
		</table> 
	</center>	 
</body>
</html>