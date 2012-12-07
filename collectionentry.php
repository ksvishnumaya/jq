<?php
require('common.php');

$collector=$_COOKIE['id'];
$giver=$_POST['name'];
$week=$_POST['week'];
$collection=$_POST['amountcollected'];
$dlamount=$_POST['dlamount'];
$dlcount=$_POST['no_of_dl_collected'];
$receipts_to_be_given=$_POST['no_receipts_to_be_given'];
$receipts_given=$_POST['receipts_given'];
$ack_status=$_POST['ack_status'];
$status=0;
if($ack_status='y')
{
$status=1;
}
if($ack_status='n')
{
	$status=0;
}

$q=mysql_query("select id from user where name='$giver' and poc_id='$collector';");
$giverid=mysql_fetch_row($q);
$q2=mysql_query("INSERT INTO collection (collector, giver, week, amountcollected, no_of_dl_collected, dlamount, no_receipts_to_be_given, receipts_given, ack_status) VALUES ('$collector', '$giverid[0]', '$week', '$collection', '$dlcount', '$dlamount', '$receipts_to_be_given', '$receipts_given', '$status');");

include('pocdash.php');
?>