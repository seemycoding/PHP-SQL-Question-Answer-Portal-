<?php include 'regserver.php';?> 
<!DOCTYPE html>
<html>
<head>
	<title>MR Forums | Register-User</title>
	<link rel="stylesheet" type="text/css" href="./Fstyle.css">

</head>
<body>

<header>
		
	
		<div class = "title">
			<h1><span>MR</span> Forums</h1>
		</div>
	
	</header>

<Section>
	<div class="container">
		
					
		<div class= "Box">
			<div class= "Branding">
				<h2>User Registration</h2>
			</div>

			<div class = "form">
			<form action="reg.php" method="POST">
			<input type="text" name="Name" placeholder="Name"><br>
			<input type="email" name="Email" placeholder="Email"><br>
			<input type="password" name="Password" placeholder="Password"><br>
			<input type="submit" name="reguser" value="Sign Up"><br>
		</form>
			</div>

			<div class="Reg">

				<a href="loginui.php">Already Registered ? <span>Login here</span></a>
			</div>

		</div>

		
	</div>
		

</Section>
		


</body>
</html>