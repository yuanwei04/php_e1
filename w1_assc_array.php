<?php
	   
	  $arr=array(1,2,3);//indexed array
	  echo " arr=array(1,2,3)<br>";
	  foreach($arr as $a) 
	  {
		  print $a."<br>";
	  }
	  echo "Key ==> value<br>";
	  foreach($arr as $key => $value)
	  {
		  print $key ."  ". $value ."<br>";
	  }
	  
	  $arr=array("DIT2283"=>"A", "DIT1253"=>"B");//associative array
	  echo ' arr=array("DIT2283"=>"A", "DIT1253"=>"B")<br>';
	  foreach($arr as $i)
	  {
		  print $i."<br>";
	  }
	  echo "Key ==> value<br>";
	  foreach($arr as $key => $value)
	  {
		   print $key ."  ". $value . "<br>";
	  }
	  
//$grade	  A       B      A-          C
//student	  Alice   Bob    Clarisa     Dolla
$grade=array("Alice" =>"A",
			 "Bob" =>"b",
			 "Clarisa"=>"A-",
			 "Dolla"=>"C");
foreach($grade as $key =>$value)
{
	print $key ." ". $value ."<br>";
}

//Kate 165cm
//Peter 170cm
//Bob 175cm
$height = array("Kate"=> 165, 
				"Peter"=> 170, 
				"Bob"=> 175);

	foreach ($height as $student => $cm)
	{
		print $student. " " . $cm . 'cm<br>';	
	}
	
echo "<br>";
print_r($height);
var_dump($height);	
?>
 