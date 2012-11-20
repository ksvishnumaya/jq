<html>

<body>
<table border=2>
<tr><td>Date</td>
	<td> Total Amount Given</td>
	<td>Total DL amount Given to FC	</td>
<td>Total Receipts to be Collected from FC</td>
<td>Acknowledgement Sign Obtained</td>
</tr>
<?php

		$id=$_COOKIE['id'];
		$city_id=$_COOKIE['city_id'];
$utype="poc";
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$q=mysql_query("select id,name from user where usertype='$utype' and city_id='$city_id';");
while($r=mysql_fetch_row($q))
{
$q1=mysql_query("select distinct date from financejournal where poc_id='$r[0]';");
while($r1=mysql_fetch_row($q1))
{

	$q2=mysql_query("select sum(cash_amount),sum(dl_amount),sum(no_of_receipts_to_be_collected),ack_obtained from financejournal where poc_id='$r[0]'and date='$r1[0]';");


	$r2=mysql_fetch_row($q2);
	echo "<tr><td>$r1[0]</td><td>$r2[0]</td><td>$r2[1]</td><td>$r2[2]</td><td>$r2[3]</td></tr>";
}
}
?>
</table>
</body>
</html>
	
