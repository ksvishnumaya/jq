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
$receipt=$_POST['ereceipt'];
$pan=$_POST['pan'];
$cityid=$_COOKIE['cfr_user_city_id'];
echo $cityid;
echo $receipt;
echo $dl;
echo $vol;
$status=$_POST['receiptstat'];
$q2=mysql_query("INSERT INTO donor (dl_no, city_id, vol_id,name, amount,phone, email,pan,address, 80G,ereceipt,billstatus) VALUES
 ('$dl','$cityid','$vol','$donorname',$amount,'$phone','$email','$pan','$address',$tax,$receipt,$status);") or die("data entry failed");

include("pocdash.php");
?>





