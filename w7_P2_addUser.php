<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DIT2153";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Sucessfully connected to database $dbname.";
}
//=====================================
//validation -empty
$userID='';
$userPass='';
if (isset($_POST['submit'])){
	if (!empty($_POST['userID'])){
		$userID=$_POST['userID'];
	}
	else {echo "user ID cannot be empty";}
	
	if (!empty($_POST['password'])){
		$userPass=$_POST['password'];
	}
	else {echo "password cannot be empty";}

//insert record into table
	//sql statement
	$sql="INSERT INTO user 	VALUES ('$userID','$userPass')";
	//fire the query
	$result=mysqli_query($conn, $sql);
	if ($result) 
		echo "Sign up sucessfully!";
	else
		echo("Sign Up failed: " . mysqli_error());
}
//=====================================
//close the db connection
mysqli_close($conn);
?>