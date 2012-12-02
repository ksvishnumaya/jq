<?php
require('common.php');
?><html>
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
	<link href="css/start/jquery-ui-1.9.1.custom.css" rel="stylesheet">
	<script src="js/jquery-1.8.2.js"></script>
	<script src="js/jquery-ui-1.9.1.custom.js"></script>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});

	</script>

	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;-
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}

	</style>
<h1>Call Journal</h1>
<table border=2>
	<tr><td>Date</td>
		<td>Name of City</td>
		<td>Total Calls Made</td>
		<td>Total amount pledged</td>
		<td>Total Amount raised</td>
	</tr>
	
<?php
$utype="poc";

$q1=mysql_query("select id,name from city where regionalhead='$id';");
while($r1=mysql_fetch_row($q1))
{


$q5=mysql_query("SELECT DISTINCT  calldate  FROM  calljournal WHERE  callerid in (select id from user where city_id='$r1[0]' and usertype='$utype');");
while($r5=mysql_fetch_row($q5))
{
$q=mysql_query("select count(id),sum(pledged),sum(raised) from calljournal where callerid in (select id from user where city_id='$r1[0]' and usertype='$utype')and calldate='$r5[0]';");
$res=mysql_fetch_row($q);


echo "<tr><td>$r5[0]</td><td>$r1[1]</td><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td></tr>";





}

$q7=mysql_query("select count(id),sum(pledged),sum(raised) from calljournal where callerid in (select id from user where city_id='$r1[0]' and usertype='$utype')");
$r7=mysql_fetch_row($q7);

echo "<tr bgcolor='cyan'><td>Total</td><td>$r1[1]</td><td>$r7[0]</td><td>$r7[1]</td><td>$r7[2]</td></tr>";

}

echo "</table>";
 



?>
	</html>