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
	<?php
	include 'conn.php';
	$sql="SELECT c_code FROM courses";
	$stmt=$conn->prepare($sql);
	if($stmt->execute()) {
	echo"<form name="."test_details"." action="."quiz2.php"." method="."post".">";
	echo"<table><tr><td colspan=2><h2 style="."text-align:center"."><u>Create a test</u></h2></td></tr><tr><td></td><td></td></tr><tr><td>Course Code : </td><td><select name="."code".">";
	$stmt->bind_result($code);
	while($stmt->fetch()) {
		echo"<option>".$code."</option>";
	}
	echo"</select></td></tr><tr><td>Course name : </td><td>";
	
	$sql="SELECT name FROM courses";
	$stmt=$conn->prepare($sql);
	if($stmt->execute()) {
		echo"<select name="."cname".">";
		$stmt->bind_result($name);
		while($stmt->fetch()) {
			echo"<option>".$name."</option>";
		}
		echo"<select>";	
	}
	else {
		echo "Some error has occured.";
	}
	echo"</td></tr><tr><td>Test name : </td><td><input type="."text"." name="."test"."></td></tr><tr><td>Date : </td><td><input type="."date"." name="."date"."></td></tr><tr><td colspan=2 style="."text-align:center"."><button type="."submit".">Start</button></td></tr></table>";
	echo"</form>";
	}
	else {
		echo"Error in execution..";
	}
	$stmt->close();	
	$conn->close();
	?>
	</div>
</body>
</html>
