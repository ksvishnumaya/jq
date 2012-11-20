<?php 

		$id=$_COOKIE['id'];
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("cfrdb",$con);
$q0=mysql_query("select id from user where poc_id='$id';");
echo "<table border=2>
<tr>
<td>Week</td>
<td>Name</td>
<td>Amount Collected</td>
<td>No. of DL s collected</td>
<td>DL amount Collected</td>
<td>Receipts to be given</td>
<td>Receipts given to Volunteer</td>
<td>Acknowledgement Sign Obtained</td>

</tr>";
$lastweek=1;
while($giverid=mysql_fetch_row($q0))
{
$r=mysql_query("select name from user where id='$giverid[0];'");
$giver=mysql_fetch_row($r);
$q=mysql_query("select week,amountcollected,no_of_dl_collected,dlamount,no_receipts_to_be_given,receipts_given,ack_status,giver from collection where giver='$giverid[0]' and collector='$id' order by giver;");


while($res=mysql_fetch_row($q))
{

echo "<tr><td>$res[0]</td><td>$giver[0]</td><td>$res[1]</td><td>$res[2]</td><td>$res[3]</td><td>$res[4]</td><td>$res[5]</td>";

if($res[6]==1)
{
	echo "<td>Acknowledgement received</td></tr>";
}

if($res[6]==0)
{
	echo "<td>Acknowledgement not received</td></tr>";
}
$lastweek=$res[0];
}
$cweek=$lastweek+1;
echo"<form id='form1' method='post' action='collectionentry.php'>

	<tr>

		<td><input type='text' name='week' value='$cweek'></td>
		<td><input type='text' name='name' value='$giver[0]'></td>
		<td><input type='text' name='amountcollected'></td>
		<td><input type='text' name='no_of_dl_collected'></td>
		<td><input type='text' name='dlamount'></td>
		<td><input type='text' name='no_receipts_to_be_given'></td>
		<td><input type='text' name='receipts_given'></td>
		<td><input type='text' name='ack_status' value='y/n'></td>

		<td><input type='submit' value='save'></td>
	</tr></form>";
}

echo "</table>";
?>
