<?php
include("common.php");
$cityid=$_GET['id'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$q=mysql_query("insert into deposit(cityid,date,amount) values('$cityid','$date',$amount);") or die("could not enter. Enter once again");
include("cityfinance.php");
?>
