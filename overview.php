<?php
require('common.php');
?><html>
<body>
<form action="insert.html" method="post">
 <input type="submit" name="Add Volunteer" value="Add volunteer">
</form>
<table border=2><tr><td>Volunteer Name</td><td>	Phone Number</td><td>Email</td> <td>Target	</td><td>Avg vol target </td><td>Donor Kit Number	</td><td>Potential Donor count</td><td>	Potential Donor count Target</td></tr>

</body>

<?php
$q=mysql_query("select * from user where city_id='$city_id' and poc_id='$id';");
$avg=mysql_query("select target,no_of_vols from city where id='$city_id';");
$res=mysql_fetch_row($avg);
$avgtarget = 0;
if($res[1]) $avgtarget= round((($res[0]/$res[1])*1.4), 2);

while($q2=mysql_fetch_row($q))
{

	if($q2[6]>=$avgtarget)
	{
echo "<tr><td><a  href='voltracker.php?vol=$q2[0]'>$q2[1]</a></td><td>$q2[2]</td><td>$q2[3]</td><td bgcolor='green'>$q2[6]</td><td>$avgtarget</td><td>$q2[7]</td><td>$q2[8]</td><td>$q2[9]</td></tr>";
}
else
{
	echo "<tr><td><a  href='voltracker.php?vol=$q2[0]'>$q2[1]</a></td><td>$q2[2]</td><td>$q2[3]</td><td bgcolor='red'>$q2[6]</td><td>$avgtarget</td><td>$q2[7]</td><td>$q2[8]</td><td>$q2[9]</td></tr>";
}
}
		
?>
</table>
</html>
