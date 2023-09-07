<?php
/* 
//Q1 only one char/symbol/number 
$str='a9c';
$pattern='/^a.c$/';
if (!preg_match($pattern,$str)){
	echo "Q1. Invalid format<br>";
}else{
	echo "Q1. good!<br>";
}
//Q2a.only lower characters a-z,no restriction on number of char (SALAH ONE...!!!)
$str='21ABDFSadasd32';
$pattern = "/(a-z){1,}/";//group (a-z) INCORRECT regExp!
if (!preg_match($pattern,$str)){
	echo "Q2a. Invalid format<br>";
}else{
	echo "Q2a. good!<br>";
}
//Q2b. only lower characters a-z,no restriction on number of char
$pattern = "/^[a-z]{1,}$/";//[either one of the chars in a...z]
if (!preg_match($pattern,$str)){
	echo "Q2b. Invalid format<br>";
}else{
	echo "Q2b. good!<br>";
}
//Q2c.contain lower characters a-z,no restriction on number of char
$str='Today is 23 Jun 2023!';
$pattern = "/[a-z]{1,}/";
if (!preg_match($pattern,$str)){
	echo "Q2c. Invalid format<br>";
}else{
	echo "Q2c. good!<br>";
}



//Q3a. only characters(both lower and upper cases) a-zA-Z  
$str='12312Adsaf21321sdASHGDHGD';
$pattern='/^[a-zA-Z]{1,}$/';
if (!preg_match($pattern,$str)){
	echo "Q3a. Invalid format<br>";
}else{
	echo "Q3a. good!<br>";
}
//Q3b. only allow one character(either lower or upper cases) a-zA-Z  
$str='x';
$pattern='/^[a-zA-Z]{1,}$/';  //A is wrong
$pattern = '/^[a-zA-Z]{1,1}$/';//B is correct
$pattern = "/^[a-zA-Z]$/";     //C best solution
if (!preg_match($pattern,$str)){
	echo "Q3b. Invalid format<br>";
}else{
	echo "Q3b. good!<br>";
}
//Q3c. only characters(both lower and upper cases) a-zA-Z, max length 10   
$str='AdsaAAA AA';
$pattern='/^[a-zA-Z]{1,10}$/';//contains
if (!preg_match($pattern,$str)){
	echo "Q3c. Invalid format<br>";
}else{
	echo "Q3c. good!<br>";
}
 
//Q4a.only allow number or decimal place (integer or float number)//assume in front/at the back of decimal must have a digit
$str='--10.0';
$pattern='/^-{0,1}[0-9]{1,}[.][0-9]{1,}$/';
$pattern='/^-?    [0-9]+   [.][0-9] +  $/';//negative?
if (!preg_match($pattern,$str)){
	echo "Q4a. Invalid format<br>";
}else{
	echo "Q4a. good!<br>";
}
//Q4b. Only (allow) integer
$str='99999';
$pattern='/^[0-9]{1,}$/';
if (!preg_match($pattern,$str)){
	echo "Q4b. Invalid format<br>";
}else{
	echo "Q4b. good!<br>";
}
//Q4c. Only floating point with 2 decimal places
$str='999.99';
$pattern = '/^[0-9]{1,}[.][0-9]{2,2}$/';
if (!preg_match($pattern,$str)){
	echo "Q4c. Invalid format<br>";
}else{
	echo "Q4c. good!<br>";
}
//Q4d. contain integer
$str='This year is 2000GDP is 999.99';
$pattern = '/[ ][0-9]{1,}[ ]/';
if (!preg_match($pattern,$str)){
	echo "Q4d. Invalid format<br>";
}else{
	echo "Q4d. good!<br>";
}
//Q4e. contain floating point with max 5 decimal places
$str='This year is 2000 GDP is 999.99';
$pattern = '/[0-9]{1,}[.][0-9]{1,5}/';
if (!preg_match($pattern,$str)){
	echo "Q4e. Invalid format<br>";
}else{
	echo "Q4e. good!<br>";
}

//Q5. only mixed of char and number
$str='This year is 2000 GDP is 999.99';
$pattern = '/^[a-zA-Z0-9]{1,}$/';
if (!preg_match($pattern,$str)){
	echo "Q5. Invalid format<br>";
}else{
	echo "Q5. good!<br>";
}*/
//Q6. phone number (countrycode-number)
//eg: + countrycode{1,3} number{8,12}
$str='1-161912213';
$pattern = '/^\+[0-9]{1,3}-[0-9]{8,12}$/';
if (!preg_match($pattern,$str)){
	echo "Q6. Invalid format<br>";
}else{
	echo "Q6. ".$str. " is good!<br>";
}
//Q7. courseCode (XXX9999)
$str='ACX9999';
$pattern = '/^[A-Z]{3,3}[0-9]{4,4}$/';
if (!preg_match($pattern,$str)){
	echo "Q7. Invalid format<br>";
}else{
	echo "Q7. ".$str. " is good!<br>";
}
//| means OR 
//"/abc|def|g/" matches "abc", "def", or "g"

//() are for grouping 
//"/(Homer|Marge) Simpson/" matches "Homer Simpson" or "Marge Simpson"
//Q8. program code DIIT, DAC DBA DINM
$pattern = '/^(DIIT|DAC|DBA|DINM)$/';
//Q9. ic number yymmdd-xx-xxxc
$pattern = '/^[0-9]{6,6}-[0-9]{2,2}-[0-9]{4,4}$/';
//Q10. email - skip let you do some reading ___@__.__
//Q11. validate gender 
/*(f/m/F/M/female/Female/Male/male)
$pattern = '/^([fF]|[mM]|[fF]emale|[Mm]ale)$/';
?>*/
