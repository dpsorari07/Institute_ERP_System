<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<style>
	.d1{
		margin:4% 20% 10% 20%;
		width:510px;
		height:550px;
		
	}
	#to,#hed{
		width:100%;
		height:50px;
		background-color:#eeeeee;
	}
	#sub{
		width:100%;
		height:50px;
		background-color:#00ff00;
	}
	#but{
		width:100%;
		height:50px;
		background-color:#eeeeee;
	}
	</style>	
</head>
<body>
	<div class="d1">
	
		<form method="POST" name="email_form_with_php" action="mail1.php" enctype="multipart/form-data"> 
		<table>
		
		<tr>
		<td colspan=2><input type="text" name="to" id="to" placeholder="To-"></td></tr>
	
		<tr>
		<td colspan=2><input type="text" name="hed" id="hed" placeholder="SUBJECT-"></td></tr>

		<tr>
		<td colspan=2><textarea rows=21 cols=66 name="msg">
		</textarea></td></tr>

		<tr>
		<td>
		<label for='uploaded_file'>Upload file:</label></td>
		<td><input type="file" name="uploaded_file"></td>
		</tr>

		<tr>
		<td colspan=2><input type="submit" name="sub" id="sub" value="Send mail"></td>
		</tr>
		
		</table>
	
		</form>
	</div>
		
</body>
</html>
