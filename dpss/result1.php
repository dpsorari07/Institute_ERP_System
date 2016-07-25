<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result Display</title>
	<style>
	body{
		background-color:#b3ccff;
	}
	.d1{
		margin:0% 10% 0% 10%;
		border:1px solid black;
		height:350px;
		padding:3% 3% 2% 3%;
		background-color:#ffffff;
	}
	</style>
</head>
<body>
	<div class="d1">
	
	<?php
	//Need to mention id through seesion 
	$tid=$_SESSION['userID'];
	//$tid="2014CSE101";
	include'conn.php';
	$sql="SELECT name FROM teacher WHERE t_id LIKE ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('s',$tid);
	$stmt->execute();
	$stmt->bind_result($name);
	while($stmt->fetch()) {
		echo"<p>Welcome, ".$name."</p>";
	}
	?>	
	
	<center>
	<h2>Result Details</h2>
	<form name="result" action="result2.php" method="post">
	<table>
	<tr>
	<td>Enter the test id to get details about all students.</td>
	</tr>
	<tr><td></td></tr>
	<tr>
	<td style="text-align:center"><input type="number" name="tid" id="tid" min=1></td>
	</tr>
	<tr><td><pre> </pre></td></tr>
	<tr>
	<td style="text-align:center"><button type="submit" name="getres">Get Details</button></td>
	</tr>
	</table>
	</form>
	</center>
	
	</div>
	
</body>
</html>
