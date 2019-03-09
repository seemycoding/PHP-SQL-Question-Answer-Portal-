<?php
session_start();

$pass="";
$database= "mydb";
		$link=mysqli_connect('localhost', 'root',"");
if (isset($_POST['reguser'])) {

	
		$email=$_POST['Email'];
		$pass=$_POST['Password'];

}

mysqli_select_db($link, $database);
			$query="SELECT * FROM users" ;
			$result=mysqli_query($link ,$query);
			while ($row=mysqli_fetch_object($result)) {
				$useremail= $row-> Email;
				$userpass=$row-> Password;
				$name=$row-> Name;
				
		




if ($userpass == $pass && $useremail == $email) {
			
			$_SESSION['username'] = $name;
			$_SESSION['name'] = $useremail;
  	  		
  	  		header('location: home.php');
		}

			


}


mysqli_free_result($result);
















	# code.





?>