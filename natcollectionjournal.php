<?php 
		$utype="poc";
		$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("cfrdb",$con);
echo "<table border=2>
<tr>
<td>Week</td>
<td>RH Name </td>
<td>Total Amount Collected</td>
<td>Total DL amount Collected</td>
<td> Total Receipts to be given</td>
</tr>";


$q=mysql_query("select id,name from user where usertype='rh';");
while($r=mysql_fetch_row($q))
{


$q1=mysql_query("select distinct week from collection where collector in (select id from user where city_id in (select id from city where regionalhead='$r[0]') and usertype='$utype') order by week;");
	while($r1=mysql_fetch_row($q1))
	{


	$q2=mysql_query("select sum(amountcollected), sum(dlamount),sum(no_receipts_to_be_given) from collection where collector in (select id from user where city_id in(select id from city where regionalhead='$r[0]') and usertype='$utype') and week='$r1[0]';");
$res=mysql_fetch_row($q2);

echo "<tr><td>$r1[0]</td><td>$r[1]</td><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td></tr>";


}
}



echo "</table>";
?>
