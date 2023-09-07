<?php
//1. create an array called $color
$color = array('red', 'blue', 'yellow');

//2. dislay all elements of the array
foreach ($color as $value) {
  echo $value . "<br>";
}

//3. append green color to the array
$color[] = 'green';
echo "after appending green color to the array<br>";
foreach ($color as $value) {
  echo $value . "<br>";
}
array_push($color,'green');
//4. insert white color at the beginning of the array
array_unshift($color,'white');
echo "after inserting white color at the beginning of the array<br>";
foreach ($color as $value) {
  echo $value . "<br>";
}

//5. count the number of element in the array  (count)
echo "Total elements : ". count($color);

//5a. display using for loop
for ($i=0;$i<count($color);$i++)
	echo $color[$i]."<br>";

//6. sort the elements in ascending order (sort)
sort($color);
echo "<br>Sorting in ascending order<br>";
for ($i=0;$i<count($color);$i++)
	echo $color[$i]."<br>";

//7. sort the elements in descending order (rsort)
rsort($color);
echo "<br>Sorting in descending order<br>";
for ($i=0;$i<count($color);$i++)
	echo $color[$i]."<br>";

//8. check if white color is one of the element in the array (in_array)
/*<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {  echo "Got Irix";}?>*/
if (in_array ('white',$color)) {
  echo "Yes, white color is in the array<br>";
}

//9. find the position of the element red
/*<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
?>
*/
echo "The position if the red color is ". array_search('red',$color)+1; 



?>
