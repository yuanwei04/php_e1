
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
<option value="Tomatoes">Tomatoes (RM 1)</option> 
<option value="Cucumbers">Cucumbers (RM 2)</option> 
<option value="Celery">Celery (RM 3)</option> 
</select> 
<br> 
<input type="submit" name="submit" value="Submit"/> 
</form> 
 
