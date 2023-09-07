<?php
	//initialization
	$age="";

	//validate user click submit button
	if (isset($_GET["submit"]))
	{
		//validate the age >17 and <100
		//if true than display age,
		//             assign to a local variable called $age
		//else display error message
		if (!empty($_GET["age"])){
			if ($_GET["age"] >17 && $_GET["age"]<100){
				echo "Output: " . $_GET["age"]. "<br>";
				$age=$_GET["age"];
			}else
				echo "The age must be between 18 and 99<br>";
		}
		else	
			echo "Please input age<br>";
		
		echo "Output: " . $_GET["submit"]. "<br>";
	}
?>

<form action="" method="GET">

age 
<input type="text" name="age"  value="<?php echo $age;?>" >
<input type="submit" name="submit" value="Send">
</form>


<?php
/*
The isset function in PHP is used to determine whether a variable is set or not. A variable is considered as a set variable if it has a value other than NULL. In other words, you can also say that the isset function is used to determine whether you have used a variable in your code or not before.
*/

?>