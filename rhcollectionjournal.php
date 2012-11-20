<?php 
$id=$_COOKIE['id'];
		$utype="poc";
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("cfrdb",$con);
echo "<table border=2>
<tr>
<td>Week</td>
<td>City Name </td>
<td>Total Amount Collected</td>
<td>Total DL amount Collected</td>
<td> Total Receipts to be given</td>
</tr>";
$q0=mysql_query("select id,name from city where regionalhead='$id';");
while($r0=mysql_fetch_row($q0))
{
$q1=mysql_query("select distinct week from collection where collector in (select id from user where city_id='$r0[0]' and usertype='$utype') order by week;");
	while($r1=mysql_fetch_row($q1))
	{


	$q=mysql_query("select sum(amountcollected), sum(dlamount),sum(no_receipts_to_be_given) from collection where collector in (select id from user where city_id='$r0[0]' and usertype='$utype') and week='$r1[0]';");
$res=mysql_fetch_row($q);

echo "<tr><td>$r1[0]</td><td>$r0[1]</td><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td></tr>";

}
}


echo "</table>";
?>
