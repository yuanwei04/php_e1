<?php
//initialization
 $course='';
//validate user click submit button
if (isset($_GET['register']))
{   //valid course DIIT DIBA DIAC DINMeither one is selected
	//assign to a local variable
	if (isset($_GET['course'])){
		echo $_GET['course'];
		$course = $_GET['course'];		
	}else{
		echo "<span style='color:red'>Must select course</span>";
	}
}	 
?>
<form action="" method="GET">
course  
<!--retain the selected radio button -->
<input type="radio" name="course" value="T" 
	<?php 
		if ($course=='T')
		{
			echo "checked";
		}
	?>>DIIT<br>
<input type="radio" name="course" value="A" 
	<?=($course=='A')?"checked":""?>
<input type="radio" name="course" value="C"
	<?=($course=='C')?"checked":""?>
>DIAC<br>
<input type="radio" name="course" value="M" 
	<?=($course=='M')?"checked":""?>
>DINM<br> 
<input type="submit" name="register" value="Register">
</form>

<?php 
		if ($course=='T')//VERSION 1
			echo "checked";
		else
			echo "";
		
		($course=='T')?	
			echo "checked":
			echo ""; 
		
		echo($course=='T')?	//VERSION 3 -short form for version 2
			 "checked":		   
			 ""; 
?>
<?=($course=='T')?		   //VERSION 4 short form for version 3
			 "checked":		
			 ""; 
?>
