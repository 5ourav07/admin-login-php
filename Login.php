<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style media="screen">
			a
			{
				margin:10px 10px;
				text-decoration: none;
				font-family: 'Merriweather', serif;
				color: #f25287;
			}

			a:hover
			{
				color: #424874;
			}
		</style>
</head>
	<body style="background-color: DarkGray">	 
		<form action="Logcheck.php" method="post"> 
			<center>
				<fieldset>
				<legend><b> Login</b></legend>
					<table border="0">
						<tr>
						    <td>
							User ID <br/>
							<input type="text" name="id" value="" required="">				                    
							</td>			 			 
						</tr>

						<tr>
							<td>
						    Password <br/>
							<input type="password" name="pwd" value="" required="">
						 	</td>
						</tr>
						 
						</tr>
						 	<td>
							<input type="submit" name="submit1" value="Login">
							<a href='Registration.php'>Register</a>
						 	</td>
						</tr>	
					</table>
				</fieldset>
			</center>
		</form>
		<?php include('Footer.php');?>
	</body>	 
</html>