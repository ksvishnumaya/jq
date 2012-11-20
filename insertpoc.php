<?php 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$city_id=$_COOKIE['city_id'];
$pass=$_POST['pass'];
$utype="poc";
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$q=mysql_query("INSERT INTO user(name,phone,email,password,city_id,usertype) VALUES('$name','$phone','$email','$pass','$city_id','$utype');") or die("Updation incorrect");
require("insert.html");
?>