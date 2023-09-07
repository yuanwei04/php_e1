<?php
//initialization
	
//validate user click submit button
if (isset($_GET["submit"]))
{
	//validate the name not empty and length >2 characters
	//display name after validation or appropriate error message 
	if(ctype_alpha($_GET["name"])){
		if(strlen($_GET["name"]) < 2){
			echo "Name must be at least 2 characters <br>";
		}
		else echo "Name: ".$_GET["name"]."<br>";
	}
	else echo "Name cannot by empty, must be characters only<br>";
}
?>
<form action="" method="GET">
name 
<input type="text" name="name" >
<input type="submit" name="submit" value="Send">
</form>

