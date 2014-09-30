<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory Game</title>
	<?php require 'logic.php';?>
	<style>
		
		.card
		{
			width: 50px;
			height: 50px;
			background-color: blue;
			float: left;
			margin: 5px;
		}		
	</style>
</head>
<body>
	<?=$cards?>


</body>
</html>