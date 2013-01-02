<?php
require('common.php');
$rowid = $_GET['id'];
$q=mysql_query("UPDATE donor SET gotdl=1 WHERE id=$rowid;") or die("SQL Error: " . mysql_error());

include("donorlist.php");
?>
