<!DOCTYPE html>
<html><head></head>
<body>
<h2>Top Up Mobile Phone</h2>
<form action="topUp.php" method="post">

			<table border="0">
				<tr>
					<td>Phone No: </td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Top Up Amount (RM): </td>
					<td><input type="number" name="amount"></td>
				</tr>
				<tr>
					<td>Promotion Code: </td>
					<td><input type="text" name="promo"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Top Up"></td>
				</tr>
			</table>
</form>
</body>
</html>


Write a PHP code for “topUp.php” page that tops up prepaid phone. 

An additional 10% (0.1) of the top up amount will be credited to the phone if user enters promotion code begins with “NY”. 
For other promotion code, additional 3% (0.03) of the top up amount will be credited to the phone. 

The following is the formula used to calculate additional amount. 
   additional amount = amount * promotion rate
   
   
The form should be validated to ensure:
•	All the fields are not empty
•	The phone number should begin with +60, then follow by 7 to 10 numbers. 
•	Top up amount must be greater than 0
•	The promotion code should contain six (6) alphanumeric characters.

Display appropriate error messages when necessary. 
Figure 1 and Figure 2 are the sample output:
Award maximum 2 marks for initialization
Award maximum 5 marks for validating phone number with RegEx
Award maximum 5 marks for validating top up amount
Award maximum 5 marks for determining promo rate 
Award maximum 3 marks for calculation 
Award maximum 5 marks to for HTML display

<?php 
//2 marks for initialization
$phone="";
$amount="";
$promo="";
$promoRate=0;
if (isset($_POST['submit'])){
	//5 marks for validating phone number with RegEx
	if (!empty($_POST['phone'])){//1m
		$pattern="/^\+60[0-9]{7,10}$/";//1m
		if (preg_match($pattern, $_POST['phone'])//1m
			$phone=$_POST['phone'];//0.5m
		else
			$phone="Phone number should begin with +60, followed by 7 to 10 numbers.";//0.5m
	}
	else { 
		echo "Phone cannot be empty";//1m
	}
	//5 marks for validating top up amount
	if (!empty($_POST['amount'])){//1m
		if ($_POST['amount']>0)//1m
			$amount=$_POST['amount'];//1m
		else
			$amount="Top up amount must be > 0";//1m 	
	}
	else { 
		echo "amount cannot be empty";//1m
	}
	//5 marks for determining promo rate 
	if (!empty($_POST['promo'])){//0.5m
		$pattern="/^[A-Za-z0-9]{6}$/";//1m
	
		if (preg_match($pattern,$_POST['promo'])) //0.5m
		{
			$promo=$_POST['promo']; //0.5
			
			if(substr($promo,0,2)=="NY"){//1.5m
				$promoRate=0.1;
			}
			else{
				$promoRate=0.03;
			}
		}
		else
			$promo="promotion code should contain 6 alphanumeric characters"; //0.5
	}
	else { 
		echo "Promo code cannot be empty";//0.5m
	}
	
	//3 marks for calculation 
	$addn=0;
	if($amount>0&&$promoRate>0){//1m
		$addn=$amount + ($amount*$promoRate) ;//2m
	}
}
?>
//5 marks to for HTML display
phone :<?=$phone?>
amount : <?=$amount ?>
promo: <?=$promo ?>
rate: <?=$promoRate ?>
total amount:<?=$addn ?>
