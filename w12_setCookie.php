<?php
setcookie("firstname","Peter",time()+10*24*60*60);//10days*24hours*60min*60sec
echo "firstname: Peter";
?>
w12_delCookie.PHP
<?php
setcookie("firstname","",time()- 3600);
//access cookie value
echo  $_COOKIE['firstname'] ." found???" ;

?>