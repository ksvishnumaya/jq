<html>

<body>
<table border=2>
<tr><td>Date</td>
	<td>Name</td>
	<td>Total num of Receipts collected from FC</td>
	<td>Total Number of Receipts given to the volunteer</td>
<td>Total Number of Receipts given to Donors</td>
</tr>

		

<?php
		$id=$_COOKIE['id'];
		$utype="poc";
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);

$q=mysql_query("select id,name from city where regionalhead='$id';");
while($r=mysql_fetch_row($q))
{
$q1=mysql_query("select distinct date from receiptjournal where poc_id in(select id from user where city_id='$r[0]' and usertype='$utype');");
while($r1=mysql_fetch_row($q1))
{
$q2=mysql_query("select sum(no_of_receipts_collected),sum(no_of_receipts_gvn_to_vol) from receiptjournal where poc_id in (select id from user where city_id='$r[0]' and usertype='$utype') and date='$r1[0]';");

$r2=mysql_fetch_row($q2);
	echo "<tr><td>$r1[0]</td><td>$r[1]</td><td>$r2[0]</td><td>$r2[1]</td><td></td></tr>";
}

}
		
?>

</table>
</html>

</table>
</body>
</html>
		
