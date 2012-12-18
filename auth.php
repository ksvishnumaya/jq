<?php
require('common.php');

$reg_head="rh";
$nat_head="nh";
$poc="poc";
$city_head="cityhead";
$nat_finance="cfo";

$email = '';
$pwd = '';

if(isset($_POST['email'])) {
	$email = $_POST["email"];
	$pwd  = $_POST["pwd"];
} elseif(isset($_COOKIE['cfr_user_id'])) {
	$email = $_COOKIE['cfr_user_email'];
	$pwd = $_COOKIE['cfr_user_pass']; // This is BAD. But, no time.
}


$query = "select email,name,password,usertype,city_id,poc_id,id from user where email='$email';";
$res = mysql_query($query, $con);
$r=mysql_fetch_assoc($res);
$name=$r['name'];
$city_id=$r['city_id'];
$poc_id=$r['poc_id'];

if($r['password'] == $pwd && $pwd!="") {
	setcookie('cfr_user_email',$email);
	setcookie('cfr_user_name',$name);
	setcookie('cfr_user_city_id',$city_id);
	setcookie('cfr_user_id',$r['id']);
	setcookie('cfr_user_pass', $pwd);
	setcookie('cfr_user_poc_id',$poc_id);
	if(isset($_COOKIE['cfr_user_id'])) {
	$city_id=0;
	if(isset($_COOKIE['cfr_user_city_id'])) $city_id = $_COOKIE['cfr_user_city_id'];
	$poc_id=0;
	if(isset($_COOKIE['cfr_user_poc_id'])) $poc_id=$_COOKIE['cfr_user_poc_id'];
	$id=$_COOKIE['cfr_user_id'];
}

	
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
	if($r['usertype']==$nat_finance){
		include("finance.php");
	}
}
else if($r['password']!=$pwd || $r['password']=="") {
	echo "<span style='background-color:beige;'><blink>Invalid username or/and password. Try again.</blink></span>";

}

mysql_close($con);
