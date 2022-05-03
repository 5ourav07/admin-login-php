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
	<title>Payment Information</title>
</head>
<body style="background-color: DarkGray">
    <center>

        <table border=1>
		 
			<tr>
		    	<td colspan=3><center><b>Payment Information</b></center></td>
		 	</tr>
		 
		 	<tr>
			    <td>ID</td>
				<td>Name</td>
				<td>Price</td>
		 	</tr>

		 	<tr>
		       	<td>01</td>
			   	<td>Laptop</td>
			   	<td>30000</td>
			</tr>
			
			<tr>
		        <td>02</td>
			    <td>Smart Phone</td>
			    <td>20000</td>
			</tr>
			
			<tr>
		        <td>03</td>
			    <td>Smart Watch</td>
			    <td>10000</td>
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