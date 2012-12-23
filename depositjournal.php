<?php
include("common.php");
echo"<table border=2><tr><td>City </td> <td>Amount</td><td>Date</td></tr>";
$q=mysql_query("select * from deposit ORDER BY cityid");
while($r=mysql_fetch_row($q))
{
	$q1=mysql_query("select name from city where id= '$r[1]';");
	$r1=mysql_fetch_row($q1);
echo "<tr><td>$r1[0]</td><td>$r[1]</td><td>$r[2]</td></tr>";

}
echo "</table>";
echo "<a href='fcdash.php'>Back</a>";
?>

