<?php
require('common.php');
?><html>
<body>
<table border=2>
<tr><td>Date</td>
	<td>Name</td>
	<td>Total num of Receipts collected from FC</td>
	<td>Total Number of Receipts given to the volunteer</td>
<td>Total Number of Receipts given to Donors</td>
</tr>

		

<?php
$utype="poc";

$q=mysql_query("select id,name from user where city_id='$city_id' and usertype='$utype';");
while($r=mysql_fetch_row($q))

{
$q1=mysql_query("select distinct date from receiptjournal where poc_id='$r[0]';");
while($r1=mysql_fetch_row($q1))
{
$q2=mysql_query("select sum(no_of_receipts_collected),sum(no_of_receipts_gvn_to_vol) from receiptjournal where poc_id='$r[0]' and date='$r1[0]';");

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
		
