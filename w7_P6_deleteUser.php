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
			$password=$row['password'];
			echo "$userID  $password";	
				
		}
	}
	else
		echo("no record found!");
}
 
if (isset($_POST["submit"])){
	if (!empty($_POST['userID'])){
		$uid=$_POST['userID'];
		$sql="DELETE FROM user WHERE userID ='$uid'";
		//fire the query
		 
		$result=mysqli_query($conn, $sql);
		if ($result) {
			echo "user record deleted sucessfully!";
			$userID="";$password="";
		}
		else
		echo("user record deletion failed: " . mysqli_error());
	}
	
}

//=====================================
//close the db connection
//mysqli_close($conn); --- close later!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
?>
//2. seek user confirmation for deletion
//4. submit => fire delete statement
  
<h3>Remove User</h3> 
<form action="" method="post"> 
Login ID: 
<input type="text"  name="userID" value="<?=$userID?>" readOnly><br><br>
Pasdword :  
<input type="password" name="password" value="<?=$password?>" readOnly > <br> 
<input type="submit" name="submit" value="Remove User"/> 
</form> 
<br>

<a href="">1. add user record </a><br>
<a href="">2. insert user record into user table </a><br>
<a href="">3. retrieve user record from user table </a><br>
<a href="">4. modify user record using form </a><br>
<a href="">5. validate and update usertable </a><br>
<a href="">7. delete from  user table </a><br>
<?php//=====================================
//close the db connection
//mysqli_close($conn); --- no longer need if post method put on top of form !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
?>