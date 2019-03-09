<?php
global $com;
global $idd;
global  $author;



	
	# code...

if (isset($_POST['write'])) {
			if (!empty($_POST))
			{
				
				$com=$_POST['comments'];
				$idd=$_POST['data'];
				$author=$_POST['author'];
				
				

				
					

	
	}


}


	$database= "mydb";
		$link=mysqli_connect('localhost', 'root',"");
			mysqli_select_db($link, $database);
			$query="INSERT INTO comment (id,Comment,author) VALUES ('$idd','$com','$author')" ;
			$result=mysqli_query($link, $query);
			
			if ($result) {
				header('location: home.php');
			}
			else
			{

				
			}
			


		
		


	# code...




?>