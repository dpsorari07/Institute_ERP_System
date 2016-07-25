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
	//Need to mention teacher id through seesion 
	$tid=$_SESSION['userID'];
	//$tid="2014CSE101";
	include'conn.php';
	$sql="SELECT name FROM teacher WHERE t_id LIKE ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('s',$tid);
	$stmt->execute();
	$stmt->bind_result($name);
	while($stmt->fetch()) {
		echo"<p>Welcome, ".$name."</p><br><br><br>";
	}
	$testid=$_POST['tid'];
	echo"<h2>The details of test with id ".$testid." are-</h2><table><tr><th style="."width:80px".">Student Id</th><th style="."width:80px".">Marks Obtained</th><th style="."width:80px".">Total Marks</th></tr>";
	
	$sql="SELECT s_id,marks,total FROM result WHERE t_id LIKE ?";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('i',$testid);
	$stmt->execute();
	$stmt->bind_result($sid,$marks,$total);
	while($stmt->fetch()) {
		echo"<tr><td style="."width:80px".">".$sid."</td><td style="."width:80px;text-align:center".">".$marks."</td><td style="."width:80px;text-align:center".">".$total."</td></tr>";	
	}
	echo"</table>";
	?>
	</div>
</body>
</html>	
