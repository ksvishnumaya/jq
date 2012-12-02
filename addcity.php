<?php 
require('common.php');

$phone=$_POST['phone'];
$email=$_POST['chemail'];
$pass=$_POST['pass'];
$cityname=$_POST['name'];
$target=$_POST['target'];
$pocneed=$_POST['pocneed'];
$volnum=$_POST['volnum'];
$cityhead=$_POST['cityhead'];

$utype="cityhead";

$q=mysql_query("INSERT INTO city(name,poc_num,no_of_vols,target,regionalhead) VALUES('$cityname','$pocneed','$volnum','$target','$id');") or die("Updation incorrect");
$q1=mysql_query("select id from city where name='$cityname';");
$r1=mysql_fetch_row($q1);
$q1=mysql_query("insert into user(name,phone,email,password,usertype,city_id) values('$cityhead','$phone','$email','$pass','$utype','$r1[0]');") or die ("could not add city head");
$q2=mysql_query("select id from user where name='$cityhead' and city_id='$r1[0]';");
$r2=mysql_fetch_row($q2);
$q=mysql_query("UPDATE  city SET  cityhead_id =  '$r2[0]' WHERE  id ='$r1[0]';")or die("city head not created");
require("Addcity.html");
