<?php
/*$arr=array();

array_unshift($arr,"A");
print_r($arr);

array_push($arr,'B');
print_r($arr);

array_unshift($arr,"A+");
print_r($arr);

array_pop($arr);
print_r($arr);

array_pop($arr);
print_r($arr);
*/
$arr=array('A','B','C','D');
array_shift($arr);
print_r($arr);

for ($i=0;$i <count($arr);$i++){
	echo $arr[$i] ."<br>";
}

?>
