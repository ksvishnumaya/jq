<?php
//echo "reached gotdl";
$rowid=2;
//$_GET['id'];
require('common.php');
$q1=mysql_query("select city_id from donor where id=$rowid;");
$r1=mysql_fetch_row($q1);
echo $r1[0];
setcookie('city',$r1[0]);
echo $rowid;
$q=mysql_query("UPDATE  donor SET  gotdl=1 WHERE  id=$rowid;") or die("errorified");

include("donorlist.php");
?>
