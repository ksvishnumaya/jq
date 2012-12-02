<?php
//$con = mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
//$db = mysql_select_db("Project_CF",$con) or die("could not locate database");

// $con = mysql_connect("mysql.makeadiff.in", "makeadiff","M@k3aDi") or die("Could not connect to database. Please check your internet connection");
// $db = mysql_select_db("inmakead_mad",$con) or die("could not locate database");

$con = mysql_connect("localhost", "root","") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("Site_Mad",$con) or die("could not locate database");

if(isset($_COOKIE['cfr_user_id'])) {
	$city_id=$_COOKIE['cfr_user_city_id'];
	$poc_id=$_COOKIE['cfr_user_poc_id'];
	$id=$_COOKIE['cfr_user_id'];
}