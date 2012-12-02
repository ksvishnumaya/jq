<?php
require('common.php');
?><html>

<body>
<table border=2>
<tr><td>Date</td>
	<td>Num of Receipts collected from FC</td>
	<td>Number of Receipts given to the volunteer</td>
<td>Acknowledgement Sign obtained</td>
</tr>
<?php
$status=0;

$q=mysql_query("select date,no_of_receipts_collected,no_of_receipts_gvn_to_vol,ack_status from receiptjournal where poc_id='$id';");

while($q2=mysql_fetch_row($q))
{
	if($q2[3]==0)
	{
		$status="no acknowledged";

	}
	if($q2[3]==1)
	{
		$status="acknowledged";
	}
	echo "<tr><td>$q2[0]</td><td>$q2[1]</td><td>$q2[2]</td><td>$status</td></tr>";
}

echo"<form id='form1' method='post' action='receiptentry.php'>

	<tr>

		<td><input type='date' name='date'></td>
		<td><input type='text' name='collected'></td>
		<td><input type='text' name='given'></td>
		<td><input type='text' name='ack_status' value='y/n'></td>

		<td><input type='submit' value='save'></td>
	</tr></form>";
		
?>

</table>
</html>

</table>
</body>
</html>
		
