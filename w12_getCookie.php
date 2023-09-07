<?php
//access cookie value
echo  $_COOKIE['firstname'] ;

//check if the cookie is set
if (isset($_COOKIE['firstname']))
	echo "Hi, ", $_COOKIE['firstname'];
else
	echo "Welcome Guest!";
	
?>