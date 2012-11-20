<?php
$con=mysql_connect("localhost", "root") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdata",$con);
$callid=$_COOKIE['callid'];
$q=mysql_query("delete from calljournal where callid='$callid';");
include("callentry.php");
?>
