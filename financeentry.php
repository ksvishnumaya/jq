<?php
$cash=$_POST['cash_amount'];
$dl=$_POST['dl_amount'];
$receipt=$_POST['receipt_count'];
$dlamount=$_POST['dl_amount'];
$date=$_POST['date'];
$ack_status=$_POST['ack_status'];
$id=$_COOKIE['id'];
$status=0;
if($ack_status='y')
{
$status=1;
}
if($ack_status='n')
{
	$status=0;
}
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$q2=mysql_query("INSERT INTO  financejournal (
poc_id ,
`date` ,
cash_amount ,
dl_amount ,
no_of_receipts_to_be_collected ,
ack_obtained)
VALUES ('$id',  '$date',  '$cash',  '$dlamount',  '$receipt',  '$status');") or die("could not enter");
include("pocdash.php");
?>

	