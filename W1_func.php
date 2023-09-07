<?php
/*Functions in PHP can help automate repetitive tasks and enable you to reuse code with a simple function call. For your first function, we'll keep it really simple.
function func1() {
  echo "Hello!";
} 
func1() // call the function*/
//For this PHP exercise, create a function called "hello" that outputs that phrase we all know and love, "Hello, World!" to the browser. Call the function
function hello($a=-1){
	echo "we all know and love, \"Hello, World!\"";
	echo $a;
	return "<hr>We are Done!<hr>";
}

echo hello("ABC");

?>
