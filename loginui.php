<?php include 'loginserver.php';?> 
<!DOCTYPE html>
<html>
<head>
	<title>MR Forums | Login-User</title>
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
				<h2>Login User</h2>
			</div>

			<div class = "form">
			<form action="loginui.php" method="POST">
			<input type="email" name="Email" placeholder="Email"></style>><br><br>
			<input type="password" name="Password" placeholder="Password"><br><br>
			<input type="submit" name="reguser" value="Login"><br><br>
			</form>
			</div>

			<div class="Reg">

				<a href="reg.php">New to MR forums ? <span>Click here</span></a>
			</div>
		</div>

		
	</div>
		

</Section>
		


</body>
</html>