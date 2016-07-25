<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Exam</title>
	<style>
	.d1{
		margin:8% 20% 2% 20%;
	}
	</style>
</head>
<body>
	<div class="d1">
	<form name="test_details" action="test2.php" method="post">
	<table>
	<tr>
	<td colspan=2><h2 style="text-align:center"><u>Online Test</u></h2></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td>Test Id : </td>
	<td><input type="number" name="tid" id="tid"></td>
	</tr>

	<tr>
	<td>Student Id : </td>
	<td><input type="text" name="sid" id="sid"></td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan=2 style="text-align:center"><button type="submit">Start</button></td>
	</tr>

	</table>
	</form>
	
	</div>
</body>
</html>
