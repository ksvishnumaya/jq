<html>
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
<table border=2><tr><td>Volunteername</td><td>Date of call</td><td>Amount Pledged</td><td>Amount raised</td></tr></html>

<?php
$id=$_COOKIE['id'];
$con=mysql_connect("instance31796.db.xeround.com:18861", "ksvmaya","pass") or die("Could not connect to database. Please check your internet connection");
$db= mysql_select_db("cfrdb",$con);
$q3=mysql_query("select id from user where poc_id='$id';");
 
while($volid=mysql_fetch_row($q3))
{

$q=mysql_query("select * from calljournal where callerid='$id' and calleeid='$volid[0]';");
$q2=mysql_query("select name from user where id='$volid[0]';");
$volname=mysql_fetch_row($q2);
//$q2=mysql_query("select name from user where poc_id='$id';");

while($res=mysql_fetch_row($q))

{
	
echo "<tr><td>$volname[0]</td><td>$res[1]</td><td>$res[4]</td><td>$res[5]</td></tr>";

}

echo"<form id='form1' action='callentry.php' method='post'>

	<tr><td><input type='text' value=$volname[0] name='volname'></td>

		<td><input type='date' name='calldate'></td>
		<td><input type='text' name='pledged'></td>
		<td><input type='raised' name='raised'></td>
		<td><input type='submit' value='save'></td>
	</tr></form>";

}
echo "</table>";
 



?>
	</html>