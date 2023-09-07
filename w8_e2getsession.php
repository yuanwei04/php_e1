<?php  //program 1
session_start(); //step 1

echo $_SESSION["visit"]."<br>";//see something
session_destroy();
echo $_SESSION["visit"]."<br>";//what do you see?
?>
<br>
<a href="w8_e1Session.php">e1</a>
<a href="w8_e2getSession.php">e2 get value from session</a>
<a href="w8_e3Forn.php">e3 user input</a>
<a href="w8_e4setSession.php">e4 set value from form</a>