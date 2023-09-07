
 <h3>SDS Pasta Order & Delivery</h3> 
<form action="showInfo.php" id="order" name="order" method="post"> 
Email: <input type="email" id="email" name="email"> 
<br> 
Pasta:<br> 
<input type="radio" value="aglio" name="pasta" >Aglio Olio (RM 10)<br> 
<input type="radio" valu="cabonara" name="pasta" >Cabonara (RM 13)<br> 
<input type="radio" value="pomodoro" name="pasta" >Pomodoro (RM 15)<br> 
Add-on: <br> 
<select name="topup[]" size="3" multiple="multiple"> 
<option value="Tomatoes">Egg (RM 1)</option> 
<option value="Cucumbers">Mushroom (RM 2)</option> 
<option value="Celery">Chicken (RM 3)</option> 
</select> 
<br> 
<input type="submit" name="submit" value="Submit"/> 
</form>

<?php//initialize
$email='';
$pasta='';
$topup=array();
$price=0;
///check if submitted
if(isset($_POST['submit'])){
//Email should be filled up with data.
//Email should end with the text "imail.sunway.edu.my".
if(!empty($_POST['email'])){
$str=$_POST['email'];
$pattern="/[a-z0-9\.\-_]{1,}@imail\.sunway\.edu\.my$/";//-1m
if (preg_match($pattern,$str)){
	email=$_POST['email'];//1m
 }
else{
echo "<span>Invalid email format</span>";
}
}
else{
echo "<span style='color:red'>Email should be filled up with data.</span>";
}

if(isset($_POST['pasta'])){
$pasta=$_POST['pasta'];
//set the price for the pasta
if($price=="aglio")
$price=10;
else if ($pasta=="cabonara")
$price=13;
else
$price=15;
}
else{
echo "<span style='color:red'>You should select at least one pasta.</span>";
}

//User should select at least one pasta.
//set the price for the pasta
if($price>0 && isset($_POST['topup'])){
$topup=$_POST['topup'];
//topup addtional price
if (in_array("Tomatoes",$topup))
$price+=1;
if (in_array("Cucumbers",$topup))
$price+=2;
if (in_array("Celery",$topup))
$price+=3;

//delivery fee if
$price+=1;
//display total payment
}
echo $email."<br>".
$pasta."<br>";
foreach($topup as $t){
echo $t."<br>";
}
echo $price;
}
?>
Press Shift + Tab to navigate to chat history.

