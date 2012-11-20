<?php
$email = $_POST["email"];
$pwd  = $_POST["pwd"];
$reg_head="rh";
$nat_head="nh";
$poc="poc";
$city_head="cityhead";
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("cfrdb",$con) or die("could not locate database");
$query = "select email,name,password,usertype,city_id,poc_id,id from user where email='$email';";
$res = mysql_query($query, $con);
$r=mysql_fetch_row($res);
$name=$r[1];
$city_id=$r[4];
$poc_id=$r[5];
$id=$r[6];
setcookie('email',$email);
	setcookie('name',$name);
	setcookie('city_id',$city_id);
	setcookie('id',$id);

if($r[2]==$pwd && $pwd!="")
{
	if($r[3]==$poc)
	{
		setcookie('poc_id',$poc_id);
include("pocdash.php");
}
if($r[3]==$city_head)
{
	include("citydash.php");
}
if($r[3]==$reg_head)
{
include("rhdash.php");

}
if($r[3]==$nat_head)
{
include("natdash.php");
}
}

else if($r[2]!=$pwd || $r[2]=="")
{
	echo "<span style='background-color:beige;'><blink>Invalid username or/and password. Try again.</blink></span>";

}

mysql_close($con);


?>
