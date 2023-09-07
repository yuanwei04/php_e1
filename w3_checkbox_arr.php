<?php
//initialization
$sm=array();
$NoOfChk=0;
//check submit done
if(isset($_GET["submit"])){
	//validate selection is made => at least one box is checked
	//display the vlaue of the checkbox(es)
	//if not, display error message
	if(isset($_GET["sm"])){
		$NoOfChk=count($_GET["sm"]);
		$sm=$_GET["sm"];
		$NoOfChk=count($sm);
		foreach ($sm as $taynu)
			echo $taynu."<br>";
	} 
	
	if ($NoOfChk==0){//None of the checkbox is ticked
		//display ERROR!
		echo "At least one must be selected<br>";
	}
}

?>
<form action="" method="GET">
social media
<input type="checkbox" name="sm[]" value="fb" 
<?=in_array('fb',$sm)?"checked":""?>
>facebook

<input type="checkbox" name="sm[]" value="ig"
<?=in_array('ig',$sm)?"checked":""?>
>instagram 

<input type="checkbox" name="sm[]" value="tw"
<?=in_array('tw',$sm)?"checked":""?>
>twitter

<input type="submit" name="submit" value="Send">

</form>