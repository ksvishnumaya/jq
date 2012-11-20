<?php 

		$city_id=$_COOKIE['city_id'];
		$utype="poc";
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("cfrdb",$con);
$q0=mysql_query("select id,name from user where city_id='$city_id' and usertype='$utype';");
echo "<table border=2>
<tr>
<td>Week</td>
<td>Name</td>
<td>Total Amount Collected</td>
<td>Total No. of DL s collected</td>
<td>Total DL amount Collected</td>
<td> Total Receipts to be given</td>

</tr>";
while($pocid=mysql_fetch_row($q0))
{
$q1=mysql_query("select distinct week from collection where collector='$pocid[0]';");
	while($r1=mysql_fetch_row($q1))
	{


	$q=mysql_query("select sum(amountcollected), sum(no_of_dl_collected),sum(dlamount),sum(no_receipts_to_be_given) from collection where collector='$pocid[0]' and week='$r1[0]';");
$res=mysql_fetch_row($q);

echo "<tr><td>$r1[0]</td><td>$pocid[1]</td><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td><td>$res[3]</td></tr>";

}

}

echo "</table>";
?>
