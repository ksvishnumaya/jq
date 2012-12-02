<?php
require('common.php');
?><html>
<body>
<form action="Addcity.html" method="post">
 <input type="submit" name="Add City" value="Add City">
</form>
		<table border=2><tr><td>City</td><td>	Num of volunteers</td><td>CH Name</td> <td>Briefing Status	</td><td>No. of POCs found </td><td>No. of POCS needed</td><td>No. of POCs trained</td><td>Total target taken</td><td>Required target</td><td>Total donor kits given to vols</td><td>Number of vol.s who made potential donors list</td></tr>
		<?php
$q1=mysql_query("select id,name,target,no_of_vols,cityhead_id,briefing_status,poc_num,target from city where regionalhead='$id';");
while($r1=mysql_fetch_row($q1))
{


$q=mysql_query("select name from user where id='$r1[4]';");
$r=mysql_fetch_row($q);

$q1=mysql_query("select count(id) from user where usertype='poc' and city_id='$r1[0];'");
$r2=mysql_fetch_row($q1);
$q4=mysql_query("SELECT count(id) FROM user WHERE  pot_donor_num IS NOT NULL AND city_id ='$r1[0]';");
$r4=mysql_fetch_row($q4);
$q5=mysql_query("select count(id) from user where kit_num IS NOT NULL and kit_num!=0 and city_id='$r1[0]';");
$q6=mysql_query("select sum(target_taken) from user where city_id='$r1[0]';");
$r6=mysql_fetch_row($q6);
$r5=mysql_fetch_row($q5);
echo "<tr><td>$r1[1]</td><td>$r1[3]</td><td>$r[0]</td><td>$r1[5]</td><td>$r2[0]</td><td>$r1[6]</td><td></td><td>$r6[0]</td><td>$r1[2]</td><td>$r5[0]</td><td>$r4[0]</tr>";
}

?>
		</body>

</table>
</html>
