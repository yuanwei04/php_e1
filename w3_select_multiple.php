<?php
//initialization
 $type=____________;
//check submit done
if (isset($_GET['submit'])){
	//check if selection is made
	//if yes, display the value and
	//retain the info in the form 
	if (isset($_GET['type'])){
		$type=$_GET['type'];
		____________
			echo _____;
		
	}else{
	//if no, display error message
	echo "Select at least one ytpe of vehicle<br>";
	}
}
?>
<form action="" method="GET">
vechile type 
<select name="type[]" multiple>
	<option value="car" <?=_________?"selected":""?>>Car
	<option value="bus" <?=_________?"selected":""?>>Bus
	<option value="lrt" <?=_________?"selected":""?>>LRT
	<option value="mrt" <?=_________?"selected":""?>>MRT
</select>
<input type="submit" name="submit" value="Send">

</form>