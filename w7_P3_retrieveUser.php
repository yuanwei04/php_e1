<?php   /* create table user (userID varchar(10) primary key, password varchar(15));*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DIT2273";

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

//1. create a form
//2. enter userID
//3. submit
?> 
<h3>Display User</h3> 
<form action="" method="post"> 
Login ID: 
<input type="text"  name="userID"> 
<br> <br>
<!--Pasdword :  
<input type="password" name="password"  > 
<br> -->
<input type="submit" name="submit" value="Retrieve"/> 
</form> 
<?php

//4. validate userID 
//validation -empty
$userID='';
$password='';
 if (isset($_POST['submit'])){
	if (!empty($_POST['userID'])){
		$userID=$_POST['userID'];
	}
	else {echo "user ID cannot be empty";}
//5. SELECT from user table
//6. display on the form	 
//select record from table
	//sql statement
	$sql="SELECT * FROM user WHERE userID ='$userID'";
	//fire the query
	$result=mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) 
	{
		echo "User ID   |  password | action<br>";
		while($row = mysqli_fetch_assoc($result)) {
		//  $row|_________|__________|
		//      ['userID']['password']
			$userID= $row['userID'];
			$password=$row['password'];
			//echo "$userID  $password";
			?>
			<?=$userID?>  <?=$password?>
			<a href="P4_editUser.php?uid=$userID">EDIT</a>
			<a href="P7_deleteUser.php?uid=$userID">DELETE</a>
			<?php
		}
	}
	else
		echo("no record found!");
}

//=====================================
//close the db connection
mysqli_close($conn);
?>
<br>
<a href="">1. add user record </a><br>
<a href="">2. insert user record into user table </a><br>
<a href="">3. retrieve user record from user table </a><br>