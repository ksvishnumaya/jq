<?php
require('common.php');
?><html>
<body>
<form action="insertpoc.html" method="post">
 <input type="submit" name="Add POC" value="Add POC">
</form>
		<table border=2><tr><td>POC Name</td><td>	Num of volunteers in the group</td><td>Trained by RH</td> <td>Total Target Amount	</td><td>Req Target Amount </td><td>Donor Kits given to the vols	</td><td>No. of volunteers who made potential donor list</td></tr>
								

		</body>
		<?php
		$city_id=$_COOKIE['city_id'];
		$poc_id=$_COOKIE['poc_id'];
		$id=$_COOKIE['id'];

$q2=mysql_query("select target,no_of_vols from city where id='$city_id';");
$r3=mysql_fetch_row($q2);
$q=mysql_query("select id,name from user where city_id='$city_id' and usertype='poc';");
while($r=mysql_fetch_row($q))
{
$q1=mysql_query("select sum(target_taken),count(id) from user where city_id='$city_id' and poc_id='$r[0]';");
$r2=mysql_fetch_row($q1);
$avgtarget=($r3[0]/$r3[1])*$r2[1];
$q4=mysql_query("SELECT count(id) FROM user WHERE  pot_donor_num IS NOT NULL AND poc_id ='$r[0]';");
$r4=mysql_fetch_row($q4);
$q5=mysql_query("select count(id) from user where kit_num IS NOT NULL and kit_num!=0 and poc_id='$r[0]';");
$r5=mysql_fetch_row($q5);
echo "<tr><td>$r[1]</td><td>$r2[1]</td><td></td><td>$r2[0]</td><td>$avgtarget</td><td>$r5[0]</td><td>$r4[0]</td></tr>";
}

?>
</table>
</html>
