<?php
setcookie("firstname","",time()- 3600);
//access cookie value
echo  $_COOKIE['firstname'] ." found???" ;
?>

