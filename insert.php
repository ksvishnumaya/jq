<?php 
require('common.php');

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$target=$_POST['target'];
$poc_id=$id;
$donorkit=$_POST['donorkitnumber'];
$potentialcount=$_POST['pot_donor_count'];
$potentialtarget=$_POST['pot_donor_target'];
$utype="vol";

$q0=mysql_query("select id,email from user where email='$email';");
$r0=mysql_fetch_row($q0);
if($r0[1]!=$email)
{
$q=mysql_query("INSERT INTO user(name,phone,email,target_taken,kit_num,pot_donor_num,pot_don_target,city_id, poc_id,usertype) VALUES('$name','$phone','$email','$target','$donorkit','$potentialcount','$potentialtarget','$city_id','$poc_id','$utype');");
}
else
 {
	$q2=mysql_query("UPDATE  user SET  target_taken =  '$target',
kit_num =  '$donorkit',
pot_donor_num =  '$potentialcount',
pot_don_target =  'potentialtarget',
poc_id =  '$poc_id' WHERE  id ='$r0[0]';") or die("updation incorrect");
}

require("insert.html");
?>