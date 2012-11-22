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
		$( ".button" ).button();
		$( "#radioset" ).buttonset();
		$( "#tabs" ).tabs();
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
	</script>

	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	

	</style>
<?php

echo"<h1>Edit Call Journal</h1>
<form id='form1' action='editcalljournal.php' method='post'>
	<table><tr><td>name</td><td><input type='text' name='volname'></td></tr>
		<tr><td>date</td><td><input type='date' name='calldate'></td></tr>
		<tr><td>Pledged Amount</td><td><input type='text' name='pledged'></td></tr>
		<tr><td>Raised Amount</td><td><input type='raised' name='raised'></td></tr>
		<tr><td><input type='submit' value='save' class='button'></td></tr></table>
	</form>";
	?>
</html>