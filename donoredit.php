<?php


//echo $vol;
$donorid=$_GET['id'];
setcookie('donorid',$donorid);
echo $donorid;
require('common.php');

$q=mysql_query("select * from donor where id='$donorid';");
$r=mysql_fetch_row($q);


echo"	<table border=2>
		<tr><td>Donor letter number</td>
		<td>	Donor Name	</td>
		<td>Amount of Donation	</td>
		<td>E-Mail id</td>
		<td>	Phone number</td>
		<td>	Address</td>
		<td>	80G Needed (Y/N)	</td>
		<td>PAN number</td>
		<td>E-Receipt Required?</td>
		<td>	Final Receipt issued (Y/N)</td></tr>";

		echo "<form action='donorentryedit.php' method='post'><tr>
<td><input type='text' value='$r[1]' name='dlnumber'></td>
<td><input type='text' value='$r[4]' name='donorname'></td>
<td><input type='text' value='$r[5]' name='amount'></td>
<td><input type='text' value='$r[7]' name='email'></td>
<td><input type='text' value='$r[6]' name='phone'></td>
<td><input type='text' value='$r[9]' name ='address'></td>
<td><select name ='80g'><option value='1'>yes</option><option value='0'>no</option></select></td>
<td><input type='text' value='$r[8]' name='pan'></td>

<td><select name ='ereceipt'><option value='1'>yes</option><option value='0'>no</option></select></td>
<td><select name ='receiptstat'><option value='1'>yes</option><option value='0'>no</option></select></td>
<td><input type='submit' name='save' value='save'></td></tr>";

		
	?>

