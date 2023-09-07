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
//1.GET => retrieve infor from database
$userID='';
$password='';
if (!empty($_GET['uid'])){
	$userID=$_GET['uid'];
 
	//1a. SELECT from user table
 	$sql="SELECT * FROM user WHERE userID ='$userID'";
	//fire the query
	$result=mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result)) {
		//  $row|_________|__________|
		//      ['userID']['password']
		//1B. ASSIGN TO LOCAL VARIABLE
			$userID= $row['userID'];
			$password=$row['password']; //echo "$userID  $password";		
		}
	}
	else
		echo("no record found!");
}
//=====================================
//close the db connection
mysqli_close($conn);
//2. create a form, retain the information 
//3. edit  user details
//4. submit => validation p5
?> 
<h3>Edit User</h3> 
<form action="P5_updUser.php" method="post"> 
Login ID: 
<input type="text"  name="userID" value="<?=$userID?>" readOnly><br><br>
Pasdword :  
<input type="password" name="password" value="<?=$password?>" > <br> 
<input type="submit" name="submit" value="Modify"/> 
</form> 
<br>
<a href="">1. add user record </a><br>
<a href="">2. insert user record into user table </a><br>
<a href="">3. retrieve user record from user table </a><br>
<a href="">4. modify user record using form </a><br>
<a href="">5. validate and update usertable </a><br>