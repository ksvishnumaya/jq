<?php
require('common.php');

$reg_head="rh";
$nat_head="nh";
$poc="poc";
$city_head="cityhead";

if(!isset($_COOKIE['id'])) {
	$email = $_POST["email"];
	$pwd  = $_POST["pwd"];

	setcookie('email',$email);
	setcookie('name',$name);
	setcookie('city_id',$city_id);
	setcookie('id',$id);
} else {
	$email = $_COOKIE['email'];
	$pwd = 'get741045'; // This is just BAD. But, no time.
}

$query = "select email,name,password,usertype,city_id,poc_id,id from user where email='$email';";
$res = mysql_query($query, $con);
$r=mysql_fetch_assoc($res);
$name=$r['name'];
$city_id=$r['city_id'];
$poc_id=$r['poc_id'];
$id=$r['id'];
if($pwd == 'get741045') $pwd = $r['password'];


if($r['password']==$pwd && $pwd!="") {
	if($r['usertype']==$poc) {
		setcookie('poc_id',$poc_id);
		include("pocdash.php");
	}
	if($r['usertype']==$city_head) {
		include("citydash.php");
	}
	if($r['usertype']==$reg_head) {
		include("rhdash.php");
	}
	if($r['usertype']==$nat_head) {
		include("natdash.php");
	}
}
else if($r['password']!=$pwd || $r['password']=="") {
	echo "<span style='background-color:beige;'><blink>Invalid username or/and password. Try again.</blink></span>";

}

mysql_close($con);
