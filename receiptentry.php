<?php
require('common.php');

$date=$_POST['date'];
$collected=$_POST['collected'];
$given=$_POST['given'];
$ack=$_POST['ack_status'];
$id=$_COOKIE['id'];
$status=0;
if($ack=='y')
{
	$status=1;
}
if($ack=='n')
{
	$status=0;
}
$q1=mysql_query("INSERT INTO `receiptjournal` (poc_id, `date`, no_of_receipts_collected, no_of_receipts_gvn_to_vol, ack_status) VALUES ('$id', '$date', '$collected', '$given' , '$status');") or die("Did not enter");

include("pocdash.php");

