<?php
require('common.php');

$name=$_POST['volname'];
$date=date('Y-m-d', strtotime($_POST['calldate']));
$pledged=$_POST['pledged'];
$raised=$_POST['raised'];
$callerid=$id;

$q=mysql_query("select id from user where name='$name' and poc_id='$callerid';");
$cid=mysql_fetch_row($q);
$q1=mysql_query("INSERT INTO calljournal(calldate,callerid,calleeid,pledged,raised) VALUES ('$date','$callerid','$cid[0]','$pledged','$raised');") or die("Did not enter");


?>
<html>

<a href="pocdash.php">dashboard</a>
</html>