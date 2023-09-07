<?php

//initialization
$type=array();
 

//check submit done

if (isset($_GET['submit'])){

//check if selection is made

//if yes, display the value and

//retain the info in the form 


  if (isset($_GET['type'])){
$type=$_GET['type'];
var_dump($type);
foreach ($type as $v)
echo $v."<br>";
}  else{
//if no, display error message
echo "Select at least one type of vehicle<br>";
  }
}
 
?>

<form action="" method="GET">

vehicle type 

<select name="type[]" multiple>

<option value="car" <?=in_array('car',$type)?"selected":""?>>Car
<option value="bus" <?=in_array('bus',$type)?"selected":""?>>Bus
<option value="lrt" <?=in_array('lrt',$type)?"selected":""?>>LRT
<option value="mrt" <?=in_array('mrt',$type)?"selected":""?>>MRT

</select>

<input type="submit" name="submit" value="Send">



</form>
Press Shift + Tab to navigate to chat history.

