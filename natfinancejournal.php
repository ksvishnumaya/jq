<?php
require('common.php');
?><html>

<body>
<table border=2>
<tr><td>Date</td>
	<td>RH Name</td>
	<td> Total Amount Given</td>
	<td>Total DL amount Given to FC	</td>
<td>Total Receipts to be Collected from FC</td>

</tr>


<?php

$utype="poc";
$q0=mysql_query("select id,name from user where usertype='rh';");
while($r0=mysql_fetch_row($q0))
{
$q1=mysql_query("select distinct date from financejournal where poc_id in (select id from user where city_id in (select id from city where regionalhead='$r0[0]') and usertype='$utype');");
while($r1=mysql_fetch_row($q1))
{

	$q2=mysql_query("select sum(cash_amount),sum(dl_amount),sum(no_of_receipts_to_be_collected) from financejournal where poc_id in (select id from user where city_id in (select id from city where regionalhead='$r0[0]') and usertype='$utype') and date='$r1[0]';");


	$r2=mysql_fetch_row($q2);
	echo "<tr><td>$r1[0]</td><td>$r0[1]</td><td>$r2[0]</td><td>$r2[1]</td><td>$r2[2]</td></tr>";
}

$q3=mysql_query("select sum(cash_amount),sum(dl_amount),sum(no_of_receipts_to_be_collected) from financejournal where poc_id in (select id from user where city_id in (select id from city where regionalhead='$r0[0]') and usertype='$utype') ; ");

$r3=mysql_fetch_row($q3);
echo "<tr bgcolor='cyan'><td>Total</td><td>$r0[1]</td><td>$r3[0]</td><td>$r3[1]</td><td>$r3[2]</td></tr>";
}
?>
</table>
</body>
</html>
	
