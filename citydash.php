<!doctype html>
<html lang="us">
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
</head>
<body>
<h1>City Dashboard</h1>

<!-- Accordion -->
<!-- Autocomplete -->
<!-- Button -->
<!-- Tabs -->
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Overview</a></li>
		<li><a href="#tabs-2">Call Journal</a></li>
		<li><a href="#tabs-3">Collection Journal</a></li>
		<li><a href="#tabs-4">Reciept Journal</a></li>
		<li><a href="#tabs-5">Finance Journal</a></li>
		<!--li><a href="#tabs-6">Deposit Register</a></li-->

	</ul>

	<div id="tabs-1">
<?php
	include("choverview.php");
	?>

		
	</div>

	<div id="tabs-2">
		<?php
include("chcalljournal.php");
?>

</div>
	<div id="tabs-3">
		<h1>Collection Journal</h1>
		<?php
	include("chcollectionjournal.php");
		?>
	
		
</div>

<div id="tabs-4">

<h1>Receipt Journal</h1>
<?php
include("chreceiptjournal.php");
?>

</div>
<div id="tabs-5"><h3>Finance Journal</h3>
<?php
include("chfinancejournal.php");

?>
</div>
<div id="tabs-6"> <h3></h3></div>
	
</div>
</body>
</html>
