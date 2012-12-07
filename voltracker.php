<?php

$vol=$_GET['vol'];
//echo $vol;
setcookie('vol',$vol);
require('common.php');

echo"	<table border=2>
		<tr><td>Donor letter number</td>
		<td>	Donor Name	</td>
		<td>Amount of Donation	</td>
		<td>E-Mail id</td>
		<td>	Phone number</td>
		<td>	Address</td><td>	80G Needed (Y/N)	</td>
		<td>PAN number</td>
		<td>	Final Receipt issued (Y/N)</td></tr>";

//$id=$_COOKIE['id'];
//$cityid=$_COOKIE['city_id'];
$q=mysql_query("select * from donor where vol_id='$vol'; ");
while($r=mysql_fetch_row($q))
{
echo "<tr><td>$r[1]</td>
<td>$r[4]</td>
<td>$r[5]</td>
<td>$r[7]</td>
<td>$r[6]</td>
<td>$r[9]</td>
<td>$r[10]</td>
<td>$r[8]</td>
<td>$r[11]</td></tr>"; 
}
echo "<form id='form1' method='post' action='donorentry.php'>
		<tr><td><input type='text' name='dlnumber'</td>
		<td><input type='text' name='donorname'></td>
		<td><input type='text' name='amount'></td>
		<td><input type='text' name='email'></td>
		<td><input type='text' name='phone'></td>
		<td><input type='text' name ='address'></td>
		<td><input type='text' name='80g'>	</td>
		<td><input type='text' name='pan'></td>
		<td><input type='text' name='receiptstat'</td>
		<td><input type='submit' name='save' value='save'></tr></table>";

?>
