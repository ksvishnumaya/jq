<?php
require('common.php');
?><html>
<body>
<form action="Addrh.html" method="post">
 <input type="submit" name="AddRH" value="Add Regional Head">
</form>
<h3><table border=2><tr bgcolor ="sky blue"><td >Regional Head Name</td>
			<td>Briefing status</td>
			<td>No of cities under RH</td>
		
		<td>No. of Volunteers in region</td>
			<td>total city heads reqd</td>
	<td>Number of city heads found</td>
<td>Num of city heads briefed</td>
<td>Number of City POC needed</td>
<td>Num of POCs found</td>
<td>No. of POCs trained</td>
<td>Total target amount</td>
<td>Req target amount</td>
<td>No of donor kits given to volunteers</td>
<td>	No. of volunteers who made potential donor list</td></tr></h3>
</body>
<?php
$id=$_COOKIE['id'];
$utype="rh";

$q=mysql_query("select id,name from user where usertype='$utype';");
while($r=mysql_fetch_row($q))
{
$q1=mysql_query("select count(id),sum(target),sum(no_of_vols),count(cityhead_id),sum(poc_num),count(target) from city where regionalhead='$r[0]';");
$r1=mysql_fetch_row($q1);

$q2=mysql_query("select count(id) from city where briefing_status=1");
$r2=mysql_fetch_row($q2);
$q3=mysql_query("select count(id) from user where city_id in (select id from city where regionalhead='$r[0]') and usertype='poc';");
$r3=mysql_fetch_row($q3);
$q4=mysql_query("SELECT count(id) FROM user WHERE  pot_donor_num IS NOT NULL AND city_id in (select id from city where regionalhead='$r[0]');");
$r4=mysql_fetch_row($q4);
$q5=mysql_query("select count(id) from user where kit_num IS NOT NULL and kit_num!=0 and city_id in(select id from city where regionalhead='$r[0]');");
$r5=mysql_fetch_row($q5);
$q6=mysql_query("select sum(target_taken) from user where city_id in (select id from city where regionalhead='$r[0]' );");
$r6=mysql_fetch_row($q6);
echo "<tr><td>$r[1]</td>
<td></td>
<td>$r1[0]</td>
<td>$r1[2]</td>
<td>$r1[0]</td>
<td>$r1[3]</td>
<td>$r2[0]</td>
<td>$r1[4]</td>
<td>$r3[0]</td>
<td></td>
<td>$r6[0]</td>
<td>$r1[1]</td>
<td>$r5[0]</td>
<td>$r4[0]</td></tr>";

}

?>
</table>
</html>
