<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
	<style>
	body{
		background-color:#b3ccff;
	}
	.d1{
		margin:0% 10% 0% 10%;
		border:1px solid black;
		height:400px;
		padding:3% 3% 2% 3%;
		background-color:#ffffff;
	}
	</style>
</head>
<body>
	<div class="d1">
	<center><h2>Update Your Details</h2>
	<form name="updateform" action="updatedata.php" method="post">
	<table>
	
	<tr>
	<td>phone no. : </td>
	<td><input type="text" name="phno" id="phno"></td>
	</tr>

	<tr>
	<td>Profile : </td>
	<td><textarea cols=20 rows=10 name="prof"></textarea>
	</td>
	</tr>

	<tr>
	<td>Education: </td>
	<td><input type="text" name="edu" id='edu'></td>
	</tr>

	<!--<tr>
	<td>Skills : </td>
	</td><input type="text" name='skl' id='skl'></td>
	</tr>-->

	<tr>
	<td>Experience: </td>
	<td><input type="text" name='exp' id='exp'></td>
	</tr>

	<tr>
	<td>password: </td>
	<td><input type="text" name='pwd' id='pwd'></td>
	</tr>
	
	<tr>
	<td colspan=2 style="text-align:center"><button type="submit" name="but" id="but">Change</button>
	</tr>

	
	
	</table>
	</center>
	</div>
</body>
</html>
