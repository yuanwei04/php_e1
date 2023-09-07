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
 
?> 
<h3>Display ALL Users</h3> 
<?php
//5. SELECT * from user table
//6. display on the tablular format	 
//select record from table
	//sql statement
	$sql="SELECT * FROM user";
	//fire the query
	$result=mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) 
	{	
		echo "<table>";
		echo "<tr>
				<th>User ID </th><th>password</th><th colspan='2'>action</th>
			  </tr>";
		while($row = mysqli_fetch_assoc($result)) {
		//  $row|_________|__________|
		//      ['userID']['password']
			$userID= $row['userID'];
			$password=$row['password'];
			//echo "$userID  $password";
			?>
			<tr>
			<td><?=$userID?></td><td>  <?=$password?></td>
			<td><a href="P4_editUser.php?uid=<?=$userID?>">EDIT</a></td>
			<td><a href="P7_deleteUser.php?uid=<?=$userID?>">DELETE</a></td><br>
			</tr>
			<?php
		}
		echo "</table>";
	}
	else
		echo("no record found!");


//=====================================
//close the db connection
mysqli_close($conn);
?>
<br>
<a href="">1. add user record </a><br>
<a href="">2. insert user record into user table </a><br>
<a href="">3. retrieve user record from user table </a><br>