<html>
<title>National Finance Dashboard</title>
<body>
<?php
include("common.php");
$q=mysql_query("select id,name from city");
while($r=mysql_fetch_row($q))
{
echo "<a href= 'donorlist.php?cityid=$r[0]'>$r[1]</a><br>";
}
?>
</body

</html>
