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
	<title>Employee Information</title>
</head>
<body style="background-color: DarkGray">
    <center>

        <table border=1>
		 
			<tr>
		    	<td colspan=3><center><b>Employee Information</b></center></td>
		 	</tr>
		 
		 	<tr>
			    <td>ID</td>
				<td>Name</td>
				<td>Password</td>
		 	</tr>

		 	<tr>
		       	<td>AAA</td>
			   	<td>Mr. A</td>
			   	<td>111</td>
			</tr>
			
			<tr>
		        <td>BBB</td>
			    <td>Mr. B</td>
			    <td>222</td>
			</tr>
			
			<tr>
		        <td>CCC</td>
			    <td>Mr. C</td>
			    <td>333</td>
			</tr>
			
			<tr>
		        <td>DDD</td>
			    <td>Mr. D</td>
			    <td>444</td>
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