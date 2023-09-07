<?php
//initialization
 $type="";
//check submit done
if (isset($_GET['submit'])){
	//check if selection is made
	//if yes, display the value and
	//retain the info in the form 
	if (isset($_GET['type'])){
		$type=$_GET['type'];
		echo $type;
		
	}else{
	//if no, display error message
	echo "Select at least one ytpe of vehicle<br>";
	}
}

?>
<form action="" method="GET">
vechile type 
<select name="type">
	<option value="car" <?=$type=="car"?"selected":""?>>Car
	<option value="bus" <?=$type=="bus"?"selected":""?>>Bus
	<option value="lrt" <?=$type=="lrt"?"selected":""?>>LRT
	<option value="mrt" <?=$type=="mrt"?"selected":""?>>MRT
</select>
<input type="submit" name="submit" value="Send">

</form>