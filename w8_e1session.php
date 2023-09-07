<?php  //program 1
session_start(); //step 1

if(isset($_SESSION["visit"]))
	$_SESSION["visit"]++;
else
	$_SESSION["visit"]=1;
echo $_SESSION["visit"];
?>
<h1>Test Session Page</h1>
<?php 
echo session_name();
?>
<br>
<a href="w8_e1Session.php">e1</a>
<a href="w8_e2getSession.php">e2 get value from session</a>