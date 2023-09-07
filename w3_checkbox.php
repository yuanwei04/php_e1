<?php
//initialization
$sm1=$sm2=$sm3="";
$NoOfChk=0;
//check submit done
if(isset($_GET["submit"])){
	//validate selection is made => at least one box is checked
	//display the vlaue of the checkbox(es)
	//if not, display error message
	if(isset($_GET["sm1"])){
		$NoOfChk++;
		$sm1=$_GET["sm1"];
		echo $sm1."<br>";
	} 
	if(isset($_GET["sm2"])){
		$NoOfChk++;
		$sm2=$_GET["sm2"];
		echo $sm2."<br>";
	} 
	if(isset($_GET["sm3"]))
	{
		$NoOfChk++;
		$sm3=$_GET["sm3"];
		echo $sm3."<br>";
	} 
	if ($NoOfChk==0){//None of the checkbox is ticked
		//display ERROR!
		echo "At least one must be selected<br>";
	}
}

?>
<form action="" method="GET">
social media
<input type="checkbox" name="sm1" value="fb" 
<?=$sm1!=""?"checked":""?>>facebook

<input type="checkbox" name="sm2" value="ig"
<?php
if ($sm2!="")       //$sm2!=""?
	echo "checked"; //"checked":
else                //
	echo "";        //""
?>>instagram 

<input type="checkbox" name="sm3" value="tw"
<?=$sm3!=""?"checked":""?>>twitter

<input type="submit" name="submit" value="Send">

</form>