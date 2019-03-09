<?php
global $Title;
global $Content;
global $Author;
if (isset($_POST['upload'])) {
		$Title=$_POST['title'];
		$Content=$_POST['Body'];
		$Author=$_POST['Author'];



$database= "mydb";
$link=mysqli_connect('localhost', 'root',"");


$databasee=mysqli_select_db($link, $database);

$query="INSERT INTO blog (Name , Body , author) VALUES ('$Title' , '$Content' , '$Author')";
$result=mysqli_query($link, $query);
if ($result) {
	
	header('location: home.php');
	

}
else
{

	echo "Failed";
}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<form type="NewPost.php" method="POST" >
		<input type="text" name="title" placeholder="Enter Post Title Here"><br>
		<textarea name="Body" placeholder="Enter Post Content here"></textarea><br>
		<input type="text" name="Author" placeholder="Author Name or Email id">
		<input type="submit" name="upload" value="Post to forum">
	</form>

</body>
</html>