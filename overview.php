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
$city_id=$_COOKIE['city_id'];
$poc_id=$_COOKIE['poc_id'];
$id=$_COOKIE['id'];

$q=mysql_query("select * from user where city_id='$city_id' and poc_id='$id';");
$avg=mysql_query("select target,no_of_vols from city where id='$city_id';");
$res=mysql_fetch_row($avg);
$avgtarget=$res[0]/$res[1];

while($q2=mysql_fetch_row($q))
{
	if($q2[6]>=$avgtarget)
	{
echo "<tr><td>$q2[1]</td><td>$q2[2]</td><td>$q2[3]</td><td bgcolor='green'>$q2[6]</td><td>$avgtarget</td><td>$q[7]</td><td>$q2[8]</td><td>$q2[9]</td></tr>";
}
else
{
	echo "<tr><td>$q2[1]</td><td>$q2[2]</td><td>$q2[3]</td><td bgcolor='red'>$q2[6]</td><td>$avgtarget</td><td>$q[7]</td><td>$q2[8]</td><td>$q2[9]</td></tr>";
}
}
		
?>
</table>
</html>
