<?php
    $name = $id = $pwd = $email = $gender = "";
    $errname = $errid = $errpwd = $erremail = $errgender = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
		$id= $_POST['id'];
		$pwd= $_POST['pwd'];
		$email=$_POST['email'];

		// Validation for name			 
		if(empty($name))
		{                 
			$errname="Your Name cannot be Empty";
		}
		else if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{   
            $errname = "Only Letters and White Space Allowed";
        }
		else if(strlen($name)<3)
		{
			$errname="Length of the name must be greater than 3";
		}		 
		else
		{
			$name=$_POST['name'];
		}

		//Validation for id
		if(empty($id))
		{         
			$errid="Fill your ID!!!";
		}
		else
		{
			$id=$_POST['id'];
		}

		//Validation for password
		if(empty($pwd))
		{    	   
			$errpwd="Fill your Password!!!";
		}
		else if(strlen($pwd)<5)
		{
			$errpwd="Password must be more than 5 Characters";
		}
		else
		{
			$pwd=$_POST['pwd'];
		}

		// Validation for email			 
		if(empty($email))
		{                   
			$erremail="Email Field cannot be Empty";
		}		 
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{    
			$erremail="Invalid Email Format";
		}
		else
		{
			$email=$_POST['email'];
		}
						 		 
		// Validation for gender
		if(empty($_POST['gender']))
		{               
            $errgender = "What is your Gender?";
        }
        else
        {
            $gender = $_POST['gender'];
        }
 
        if($errid==null && $errname==null && $errpwd==null && $erremail==null)
        {
			$data =  $id."|".$pwd."|".$name."|".$email."|".$gender."|"."\r\n";

			$file=fopen('admin.txt', 'a');
            fwrite($file, $data);
            fclose($file);
		} 
	}
?>

<DOCTYPE html>
<html>
<head>
<title>Admin Registration</title>
</head>				
<body style="background-color: DarkGray">
	<form action="Registration.php" method="POST">
		<center>		
			<fieldset>
				<legend><b>Admin Registration</b></legend>
				<table border=0>
					<tr>
						<td>
							Name <br/>
		                    <input type="text" name="name" value="">
							<span style="color:red;"><?php echo $errname ?> </span>
	                	</td>					  
					</tr>
					
					<tr>
						<td>
							Id <br/>
	                      	<input type="text" name="id" value="">
						  	<span style="color:red;"><?php echo $errid ?> </span>
	                	</td>					  
					</tr>
					
					<tr>
						<td>
							Password <br/>
	                      	<input type="password" name="pwd" value="">
						 	 <span style="color:red;"><?php echo $errpwd ?> </span>
	                	</td>					  
					</tr>
					
					<tr>
						<td>
							Email <br/>
	                      	<input type="text" name="email" value="">
						  	<span style="color:red;"> <?php echo $erremail ?> </span> 
	               		</td>					  
	               	</tr>

					<tr>
				    	<td>
						    Gender <br/>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="others">Others
							<span style="color:red;"> <?php echo $errgender ?> </span>
				    	</td>
				    </tr>

				    <tr>
				    	<td>
							<input type="submit" name="submit" value="Sign Up">
							<a href='Login.php'>Sign in</a>
				    	</td>
				    </tr>
				</table>
			</fieldset>
		</center>
	</form>
	<?php include('Footer.php');?>
</body>
</html>			