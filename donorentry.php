<?php
require('common.php');
$vol=$_COOKIE['vol'];
$dl=$_POST['dlnumber'];
$donorname=$_POST['donorname'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$tax=$_POST['80g'];
$pan=$_POST['pan'];
$cityid=$_COOKIE['city_id'];
$status=$_POST['receiptstat'];
$q2=mysql_query("INSERT INTO donor (dl_no, city_id, vol_id,name, amount,phone, email,pan,address, 80G, billstatus) VALUES ('$dl','$cityid','$vol','$donorname','$amount','$phone','$email','$pan','$address','$tax','$status');") or die("data entry failed");
include("pocdash.php");
?>




