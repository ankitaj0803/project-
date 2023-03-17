<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$username = $_POST['username'];
		$username = stripslashes($username);
		$username = addslashes($username);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$college = $_POST['college'];
		$college = stripslashes($college);
		$college = addslashes($college);
		$str="SELECT email from users WHERE email='$email'";
		$result=mysqli_query($con,$str);
		
		
		if((mysqli_num_rows($result))>0)	
		{
			$_SESSION['status']="This email is already registered";
$_SESSION['status_code']="success";
           // echo "<script>alert('Sorry.. This email is already registered !!');</script>";
		
            header("refresh:2;url=login.php");
        }
		else
		{
            $str="INSERT into users(username,email,password,college) VALUES('$username','$email','$password','$college')";
			if((mysqli_query($con,$str)))
				//$run_query=mysqli_query($con,$str);
				//if($str)
				
					//echo "hi";
					//$_SESSION['status']="You have successfully registered";
				//	$_SESSION['status_code']="success";
				
		$_SESSION['status']="You have successfully registered";
$_SESSION['status_code']="success";	
		//echo "<script>alert('Congrats.. You have successfully registered !!');</script>";
			header("refresh:2;url=login.php");
			//header('location: welcome.php?q=1');
				
		}
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | Online Quiz System</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center> <h5 style="font-family: Noto Sans;">Register to </h5><h4 style="font-family: Noto Sans;">Online Quiz System</h4></center><br>
							<form method="post" action="register.php" enctype="multipart/form-data">
                                
								<div class="form-group">
									<label>Enter Your Username:</label>
									<input type="text" name="username" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" required />
                                </div>
								<div class="form-group">
									<label>Enter Your College Name:</label>
									<input type="text" name="college" class="form-control" required />
								</div>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<?php include_once('inc/footer.php'); ?>

	</body>
</html>