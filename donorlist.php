<html>
<title>
	Donor Details
</title>
<body>
<table border=2>
<tr><td>DL Number</td><td>Name</td><td> Amount</td><td> Phone</td><td>Email</td><td>PAN</td><td>Address</td><td>80g</td></tr>
</table>
<?php
include("common.php");
$city=$_GET['cityid'];
$q=mysql_query("select * from donor where city_id='$city';");
while($r=mysql_fetch_row($q))
{
	echo "<tr><td>$r[1]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td><td>$r[9]</td></tr>";
}
?>
</body>
</html>
