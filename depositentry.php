<?php
include("common.php");
$amount=$_POST['amount'];
$date=$_POST['date'];
$q=mysql_query("insert into deposit(cityid,date,amount) values('$city_id','$date',$amount);") or die("could not enter. Enter once again");
include("cityfinance.php");
?>
