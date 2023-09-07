<?php

echo date('F', time())=='August'?'Yes'.'<br>':'No'.'<br>';


echo "1: ".date("d/m/Y"). "<br>";
echo "2: ".date("d-m-Y"). "<br>";
echo "3: ".date("d.m.Y"). "<br>";



//strtotime ($EnglishDateTime, $time_now)
$newDate = date('Y-m-d', strtotime(' + 5 years')). "<br>";;
echo "4: ".$newDate;
$newDate = date('Y-m-d', strtotime(' + 5 days')). "<br>";
echo "5: ".$newDate;
$newDate = date('Y-m-d', strtotime(' + 5 months')). "<br>";
echo "6: ".$newDate;
$newDate = date('Y-m-d', strtotime(' + 5 weeks')). "<br>";
echo "7: ".$newDate;
 
$date = "2023-06-16";
echo "8: ".$newDate = date('Y-m-d', strtotime($date. ' + 5 years')). "<br>";
//
echo strtotime("now") . "<br>" ;
echo strtotime("3 October 2005") . "<br>" ;
echo strtotime("+5 hours") . "<br>" ;
echo strtotime("+1 week") . "<br>" ;
echo strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>" ;
echo strtotime("next Monday") . "<br>" ;
echo strtotime("last Sunday") ;
  
?>
 