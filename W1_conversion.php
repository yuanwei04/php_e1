<?php
/*variable
	$name = "Uncle Roger"; #string type
	$age = 45; #integer type
	$rating = 4.9; #float type 0 - 5

	echo $name . is_string($name); #check $name is a string type
	echo "<br>";
	echo $rating .is_string($rating); #check $rating is a string type
	echo "<br>";
	echo $rating .is_float($rating); #check $rating is a string type
	echo "<br>";
	echo $rating .is_double($rating); #check $rating is a string type
	echo "<br>";
	echo $age .is_int($age); #check $age is a string type
	echo "<br>";
	echo "name: " .gettype($name); #see data type for $name
	echo "<br>";
	echo "age: " .gettype($age); #see data type for $age
	echo "<br>";
	echo "rating: ". gettype($rating); #see data type for $rating
	echo "<hr>";
*/
	#auto conversion via operation 
	$sum = "3"+5;
	echo "<br>$sum<br>";
	echo gettype($sum);
	echo "<hr>";
	$str = (5)."3";
	echo "<br>$str<br>";
	echo gettype($str);	
	$prod= (5)*"3";
	echo "<br>$prod<br>";
	echo gettype($prod);	
	$div= (5)/"3";
	echo "<br>$div<br>";
	echo gettype($div);
	echo "<hr>";
	
	#casting - force conversion
	$num = (int)"200.55";
	echo "<br>$num<br>";
	echo gettype($num);	
   //cast to string
	echo "<hr>";
	$num = (string)"200.55";
	echo "<br>$num<br>";
	echo gettype($num);	
?>