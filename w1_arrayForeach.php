<?php
	  $arr=array(1,2,3,4);
	  for ($i=0;$i<4;$i++){
		  echo $arr[$i]."<br>";
	  }
 
	  foreach ($arr as  $num)
		echo   $num."<br>";
		
	  foreach ($arr as $idx=>$val)//key => value
		echo $idx."  ". $val."<br>";
		
			
?>
 