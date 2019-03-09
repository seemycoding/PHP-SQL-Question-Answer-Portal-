
 <?php include 'comments.php';?> 
<?php
global $idi;
if (isset($_GET['value'])) {
	# code...

$idi=$_GET['value'];

}
 ?>

<?php
global $check;

$database= "mydb";
$link=mysqli_connect('localhost', 'root',"");

session_start();

if (!isset($_SESSION['username'])) {
  	
  	header('location: loginui.php');
  }
else
	{

		//echo $_SESSION['username'];
	}

if (isset($_SESSION['name'])) {
 	# code.../
 	$check=$_SESSION['name'];
 	 // $_SESSION['check']=$check;
 } 



if (isset($_POST['add'])) {
header('location: NewPost.php');
}
if (isset($_POST['logout'])) {
	session_destroy();

header('location: loginui.php');
	# code...
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home | Posts</title>
	<link rel="stylesheet" type="text/css" href="./Fstyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>

<header>
	<div class = "titlee">
		<div class = "Nav">
			<form action="home.php" method="POST">
			<input type="submit" name="logout" value="Logout">
			<input type="submit" name="add" value="Add new post">
			</form>
		</div>

		<div class = "head">
			<h1><span>MR</span> Forums</h1>
			<h4><span>Welcome</span> <?php echo  $_SESSION['username'];?></h4>
		</div>
	</div>		

</header>
<aside>
	<div class = "username">
		<img src="dinny.jpg">
	<div class="prof ">
	<i class="material-icons">add_a_photo</i>
	<h4><?php echo $_SESSION['username']; ?></h4><br><br>
	</div>
	<i class="material-icons">library_books</i>
	<a href="home.php"><h4>Saved Post</h4><br><br></a>
	<i class="material-icons">local_post_office</i>
	<a href="homepost.php?id=<?php echo $check; ?>"><h4>Your Post</h4></a>
	
	</div>

	
</aside>
</body>
</html>

	
<?php


mysqli_select_db($link, $database);
			$query="SELECT * FROM blog WHERE author='". $idi. "'";
			$queryy="SELECT * FROM comment" ;
			$result=mysqli_query($link ,$query);
			$resultt=mysqli_query($link ,$queryy);
			$post = mysqli_fetch_all($resultt , MYSQLI_ASSOC);
	
			while ($row=mysqli_fetch_object($result)) {
				$Name= $row-> Name;
				$Body=$row-> Body;
				$Author=$row-> author ; 
				$Time=$row-> time;
				$id=$row-> id;


				
echo "<section>";
echo "<div class = containe>";
echo "<div class = container>";
echo 	"<div class = Well>";
				echo "<h2>" .$Name. "</h2>"; 
				echo "<p>". $Body."<p>";
				echo "<h4>"."Posted By  " . $Author."</h4>";
				echo "<h5>"."Created at  ". $Time."</h5> <br> <br>";
				

echo	"</div>" ;
echo "</div>";
echo "<label>Comments</label>";

echo "<div class = container>";
	echo "<div class = Comment>";
	echo "<div class = CommentSection>";
			foreach ($post as $posts) 
					{
						if ($id==$posts['id']) 
							{
							echo "<h5>". $posts['Author']."<br>".$posts['Comment']."</h5>";
							}
					}

	echo "</div>";
	echo "</div>";


	echo "<div class=SendComment>";
	echo "<form action = home.php method=POST>
		<input type=text name=comments placeholder= Comments>
		<input name=data id=data value=$id type=hidden > 
		<input type=submit name=write value=send><br>
		</form>";
	echo "</div>";
		
		

echo "</div>";
echo "</br>";
echo "</section>";
echo "<containe>";
}

?>
