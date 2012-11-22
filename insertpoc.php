<?php
require('common.php');

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$city_id=$_COOKIE['city_id'];
$pass=$_POST['pass'];
$utype="poc";

$q=mysql_query("INSERT INTO user(name,phone,email,password,city_id,usertype) VALUES('$name','$phone','$email','$pass','$city_id','$utype');") or die("Updation incorrect");
require("insert.html");
