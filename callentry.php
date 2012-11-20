<html>
<?php
$name=$_POST['volname'];
$date=$_POST['calldate'];
$pledged=$_POST['pledged'];
$raised=$_POST['raised'];
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$callerid=$_COOKIE['id'];
$q=mysql_query("select id from user where name='$name' and poc_id='$callerid';");
$cid=mysql_fetch_row($q);
$q1=mysql_query("INSERT INTO calljournal(calldate,callerid,calleeid,pledged,raised) VALUES ('$date','$callerid','$cid[0]','$pledged','$raised');") or die("Did not enter");


?>
<a href="pocdash.php">dashboard</a>
</html>