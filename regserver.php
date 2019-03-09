<?php
session_start();
global $useremail;
global $name;
global	$email;
global	$pass;
global $insertresult;
$database= "mydb";
		$link=mysqli_connect('localhost', 'root',"");

if (isset($_POST['reguser'])) {

		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$pass=$_POST['Password'];


}

		
		$database=mysqli_select_db($link, $database);
		$query="SELECT * FROM users" ;
		$result=mysqli_query($link ,$query);
		while ($row=mysqli_fetch_object($result)) {
			$useremail= $row-> Email;
			$username=$row-> Name;



if (!($username === $name && $useremail === $email)) {

	if (!empty($name) && !empty($email) && !empty($pass)) {
		# code...
	
		$insertquery="INSERT INTO users	(Name, Email, Password) VALUES ('$name', '$email' , '$pass')";

		$insertresult= mysqli_query($link , $insertquery);
	}	
		
}
if ($insertresult) {
	$_SESSION['username'] = $name;
	$_SESSION['name'] = $useremail;

		header('location: home.php');
}


}
mysqli_free_result($result);



















	# code.





?>