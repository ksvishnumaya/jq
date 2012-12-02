<?php
require('common.php');

$cash=$_POST['cash_amount'];
$dl=$_POST['dl_amount'];
$receipt=$_POST['receipt_count'];
$dlamount=$_POST['dl_amount'];
$date=$_POST['date'];
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

$q2=mysql_query("INSERT INTO  financejournal (
poc_id ,
`date` ,
cash_amount ,
dl_amount ,
no_of_receipts_to_be_collected ,
ack_obtained)
VALUES ('$id',  '$date',  '$cash',  '$dlamount',  '$receipt',  '$status');") or die("could not enter");
include("pocdash.php");

	