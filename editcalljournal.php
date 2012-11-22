<?php
require('common.php');

$callid=$_COOKIE['callid'];
$q=mysql_query("delete from calljournal where callid='$callid';");
include("callentry.php");

