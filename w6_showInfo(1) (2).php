<!--<h3>SDS Pasta Order & Delivery</h3> 
<form action="showInfo.php" id="order" name="order" method="post"> 
Email: <input type="email" id="email" name="email"> 
<br> 
Pasta:<br> 
<input type="radio" value="aglio" name="pasta" >Aglio Olio (RM 10)<br> 
<input type="radio" valu="cabonara" name="pasta" >Cabonara (RM 13)<br> 
<input type="radio" value="pomodoro" name="pasta" >Pomodoro (RM 15)<br> 
Add-on: <br> 
<select name="topup" size="3" multiple="multiple"> 
<option value="Tomatoes">Egg (RM 1)</option> 
<option value="Cucumbers">Mushroom (RM 2)</option> 
<option value="Celery">Chicken (RM 3)</option> 
</select> 
<br> 
<input type="submit" name="submit" value="Submit"/> 
</form> -->
<?php
//initialize --1m
$email='';
$pasta='';
$topup=array();
$price=0;
///check if submitted
if(isset($_POST['submit'])){ //--1m
	//Email should be filled up with data. 
    //Email should end with the text “imail.sunway.edu.my". 
	if (!empty($_POST['email'])){//1m
		$str=$_POST['email'];
		//dot . matches any character except a \n line break
		$pattern="/[a-zA-Z0-9\.\-_]{1,}@imail\.sunway\.edu\.my$/";//-1m
		if (preg_match($pattern, $str)){//1m
			$email=$_POST['email'];//1m
			}
		else{	
			echo "<span style='color:red'>Invalid email format</span>";
		}	
	}
	else{ //1m
		echo "<span style='color:red'>Email should be filled up with data.<span>";
		}
	
	//User should select at least one pasta. 
	if (isset($_POST['pasta'])){
		$pasta=$_POST['pasta'];
		//set the price for the pasta
		if ($pasta=="aglio")//only if pasta is selected
			$price=10;
		else if ($pasta=="cabonara")
			$price=13;
		else 
			$price=15;
	}
	else{
		echo "<span style='color:red'>You should select at least one pasta</span>";
	}	
	if ($price >0 && isset($_POST['topup'])){
		$topup = $_POST['topup'];
		var_dump($topup);
		//topup additional price 
		if (in_array("Tomatoes",$topup))//why cannot use else-if ?
			$price+=1;	
		if (in_array("Cucumbers",$topup))
			$price+=2;
		if (in_array("Celery",$topup))
			$price+=3;
		
		//delivery fee if 
		$price+=1;
			//display total payment
	}
	echo $email."<br>".//5m
		$pasta."<br>";
	foreach ($topup as $t){
		echo $t."<br>";
	}
	echo $price;
} 

?>
<table >
		<caption>Order Information</caption>
		<tr>
			<td>E-mail:</td><td><?=$email?></td>
		</tr>
		<tr>
			<td>Pasta:</td><td><?=$pasta?></td>		
		</tr>
		<tr>
			<td>Add-on:</td><td><?php
				foreach ($topup as $t){
					echo $t."<br>";
				}?>
			</td>		
		</tr>
		<tr>
			<td>Total (RM):</td><td><?=$price?></td>		
		</tr>
	</table>
</body>
</html>

