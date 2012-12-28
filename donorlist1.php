<html>
<title>
	Donor Details
</title>
<body>
<table border=2>
<tr><td>DL Number</td><td>Name</td><td> Amount</td><td> Phone</td><td>Email</td><td>PAN</td><td>Address</td><td>80g</td><td>Recieved DL</td></tr>
<?php
include("common.php");
$city=$_COOKIE['city'];
$q=mysql_query("select * from donor where city_id='$city';");
while($r=mysql_fetch_row($q))
{
	echo "<tr><td>$r[1]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td><td>$r[9]</td><td></td>";
	if($r[12]==0)
{
	echo "<td><form action='gotdl.php?id=$r[0]' method='post'> <input type='submit' value='Recieved'> </form></td></tr>";
}	

if($r[12]==1)
{
	echo "<td>Recieved</td></tr>";
}
}
setcookie ("city", "", time() - 3600);
//echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type='submit' value ='save'></form>";
?>
</table>
</body>
</html>
