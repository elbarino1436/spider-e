<?php
include('php-includes/check-login.php');
include('php-includes/connect.php');
$userid = $_SESSION['userid'];
$search = $userid;





?>	

						


<html>
<head>
<link type="text/css" rel="stylesheet" href="currency_style.css"/>
</head>
<body>
<div id="wrapper">

<div id="convert_div">
<form method="post"action="convert_currency.php">
 <input type="text" name="amount" placeholder="Enter Amount">
 <select name="convert_from">
  <option  value="INR">Indian Rupee</option>
  <option  value="USD">US Dollar</option>
  <option  value="SGD">Singapore Dollar</option>
  <option  value="EUR">Euro</option>
  <option  value="AED">UAE Dirham</option>
 </select>
 <select name="convert_to">
  <option  value="INR">Indian Rupee</option>
  <option  value="USD">US Dollar</option>
  <option  value="SGD">Singapore Dollar</option>
  <option  value="EUR">Euro</option>
  <option  value="AED">UAE Dirham</option>
 </select>
 <br>
 <input type="submit" name="convert_currency" value="Convert Currency">
</form>
</div>

</div>
</body>
</html>

