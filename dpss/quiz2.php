<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Created</title>
</head>
<body>
<center>
<?php
$ccode=$_POST['code'];
$cname=$_POST['cname'];
$name=$_POST['test'];
$dat=$_POST['date'];
$flag=0;
if(isset($_POST['code']) && isset($_POST['cname']) && isset($_POST['test']) && isset($_POST['date'])) {

include 'conn.php';
$sql="SELECT c_code,name FROM courses";
$stmt=$conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($code,$corname);
while($stmt->fetch()) {
	if($code==$ccode) {
		if($cname==$corname) {
			$flag=1;
		}
		else {
			$flag=0;
		}
	}
}
if($flag==1) {
	$sql="INSERT INTO test VALUES (NULL,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('ssss',$ccode,$cname,$name,$dat);
	if($stmt->execute()) {
		echo"<p>Now you can start creating your test..</p><br><br>";	
	}
	$sql="SELECT MAX(id) FROM test";
	$stmt=$conn->prepare($sql);
	if($stmt->execute()) {
		$stmt->bind_result($testid);
		while($stmt->fetch()) {
			$_SESSION['testid']=$testid;
			$_SESSION['testname']=$name;
			$_SESSION['ccode']=$ccode;
			echo"<br><p>Your test id is: </p><h2>".$testid."</h2>";
		}
	}
	else {
		echo"Error getting test id.";
	}
	echo"<br><br><h1><a href="."quiz3.php".">CLICK HERE</a></h1>";
}
else {
	echo"Course code and course name doesn't match.";
}

}
else
{
	echo"All the fields are mendatory";
}
$stmt->close();
$conn->close();
?>
</body>
</html>

