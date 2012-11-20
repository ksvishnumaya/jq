<html>

<body>
<table border=2>
<tr><td>Date</td>
	<td>Amount Given</td>
	<td>DL amount Given</td>
<td>No of Receipts to be Collected</td>
<td>Acknowledgement Sign Obtained</td>
</tr>
<?php
$status=0;
		$id=$_COOKIE['id'];
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$q=mysql_query("select date,cash_amount,dl_amount,no_of_receipts_to_be_collected,ack_obtained from financejournal where poc_id='$id';");

while($q2=mysql_fetch_row($q))
{
	if($q2[4]==0)
	{
		$status="not acknowledged";

	}
	if($q2[4]==1)
	{
		$status="acknowledged";
	}
	echo "<tr><td>$q2[0]</td><td>$q2[1]</td><td>$q2[2]</td><td>$q2[3]</td><td>$status</td></tr>";
}

echo"<form id='form1' method='post' action='financeentry.php'>

	<tr>

		<td><input type='date' name='date'></td>
		<td><input type='text' name='cash_amount'></td>
		<td><input type='text' name='dl_amount'></td>
		<td><input type='text' name='receipt_count'></td>
		<td><input type='text' name='ack_status' value='y/n'></td>
		<td><input type='submit' value='save'></td>
	</tr></form>";
		
?>

</table>
</html>

</table>
</body>
</html>
	
