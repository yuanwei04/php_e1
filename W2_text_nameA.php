<?php
//initialization
$name="";	
//validate user click submit button
if (isset($_GET["submit"]))
{
	//validate the name not empty and length >2 characters
	//display name and assign to a local variable $name
	//	after validation or appropriate error message 
	if(!empty($_GET["name"])){//ctype_alpha ( $str ) //regular expression
		if(strlen($_GET["name"]) <= 2){
			echo "Name must be at least 3 characters <br>";
		 
		}
		else{
			echo "Name: ".$_GET["name"]."<br>";
			$name=$_GET["name"];
		}
	}
	else echo "Name cannot by empty<br>";
}
?>
<form action="" method="GET">
name 
<input type="text" name="name" value="<?php echo $name; ?>"><br>
alsoName 
<input type="text" name="alsoName" value="<?=$name?>">
<input type="text" name="alsoName1" value="<?="ABC"?>">
<input type="text" name="alsoName2" value="<?=123?>">
<input type="text" name="alsoName3" value="<?='abc'?>">
<input type="submit" name="submit" value="Send">
</form>


