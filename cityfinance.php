<html>
<title>
	City Finance
	</title>
		<head>
			City Finance Dashboard
		</head>
		<body>
			<table border=2>
				<tr><td>Date</td><td>Amount</td></tr>
			<?php
			include("common.php");
			$id=$_COOKIE['cfr_user_city_id'];
			$q=mysql_query("select * from deposit where cityid = '$id'");
			while($r=mysql_fetch_row($q))
			{
				$q1=mysql_query("select name from city where id='$r[1]'");
				$r1=mysql_fetch_row($q1);
				echo "<tr><td>$r[2]</td><td>$r[3]</td></tr>";
			}
echo "</table>";
?>

<form id = deposit action="depositentry.php?id=$id" method= post>
	<input type= "text" name ="date">
	<input type="text" name="amount">
	<input type= "submit" name="Save">
	</form>
</body>
</html>


