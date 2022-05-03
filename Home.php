<?php	
	session_start();
	if(!isset($_SESSION['id']))
	{  
		header("location: Login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
	</head>

	<style media="screen">
		a
		{
			margin:10px 10px;
			text-decoration: none;
			font-family: 'Merriweather', serif;
			color: #000000;
		}
		a:hover
		{
			color: #424874;
		}
	</style>

	<body style="background-color: DarkGray">
		<center><b>Welcome to Admin Panel!! <br/> <?= $_SESSION['name']?></b></center>
	    <hr>
		<div class="topManu">
			<center>
				<strong>
		 				<a href='AdminInfo.php'><?= $_SESSION['name']?>'s Profile</a>
	                    <a href='EmployeeInfo.php'>Employee's Profile</a>
						<a href='Products.php'>Products</a>
	                    <a href='Customers.php'>Customers</a>
	                    <a href='Payments.php'>Payments</a>
	                    <a href='Orders.php'>Orders</a>
						<a href='Logout.php'>Sign out</a> 
		 		</strong>
			</center>
		</div>
		<hr>
		<?php include('Footer.php');?>
    </body>
</html>





