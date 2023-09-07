<?php
	session_start(); //step 1 prgram 2
	echo $_SESSION["visit"];//from W8_e1session.php
	
	if (isset($_REQUEST["submit"])){//from W8_e3Form.php
		if (!empty($_REQUEST["uName"])){
			$_SESSION["userName"]=$_REQUEST["uName"];
			echo $_SESSION["userName"];
				
		}
		if (!empty($_REQUEST["pass"])){
			$_SESSION["password"]=$_REQUEST["pass"];
			echo $_SESSION["password"];
		}
	}
	session_destroy();
?>


<?php
		
		//**another method*****----Cookie start
		//setcookie($cookie_name, $cookie_value, time()+ (60*60*24), "/"); // 86400 = 1 day
		setcookie("uName","PLL");//$_REQUEST["tName"]);
		setcookie("uPass","pll");//$_REQUEST["pass"]);
		echo "COOKIE user". $_COOKIE["uName"];//username
		echo "COOKIE pass".$_COOKIE["uPass"];//password
		//**another method*****----Cookie end
	}
	session_destroy();
	setcookie("uName", "", time()- (60*60*24), "/"); // 86400 = 1 day PAST ONE DAY - EXPIRIED
?>
<a href="w11_Session.php">Back</a>
<a href="w11_SessionForm.php">Back to Form</a>