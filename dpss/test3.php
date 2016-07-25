<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Online Exam</title>
	<style>
	body{
		background-color:#b3ccff;
	}
	.d1{
		margin:0% 10% 0% 10%;
		border:1px solid black;
		padding:1% 3% 2% 3%;
		background-color:#ffffff;
	}
	</style>

</head>
<body>
<div class="d1">
<?php
include'conn.php';
$testid=$_SESSION['testid'];

$sql="SELECT MAX(que_no) FROM question WHERE tid LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('i',$testid);
$stmt->execute();
$stmt->bind_result($noq);
while($stmt->fetch()) {
	$maxque=$noq;
}

echo"Welcome, ".$_SESSION['name'];
$testid=$_SESSION['testid'];

$sql="SELECT test_name FROM test WHERE id LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('i',$testid);
$stmt->execute();
$stmt->bind_result($testname);
while($stmt->fetch()) {
	echo"<center><h2>".$testname."</h2></center><hr><hr><br><br><br>";
}

$counter=1;
$result=0;
$correct=0;
$miss=0;
$wrong=0;
$total=0;
$negative=0;

$sql="SELECT que_no,ans,marks,neg FROM question WHERE tid LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('i',$testid);
$stmt->execute();
$stmt->bind_result($qno,$ans,$marks,$neg);
while($stmt->fetch()) {
	$counter=$qno;
	$total=$total+$marks;
	if(isset($_POST[$counter]))
	{
		if($_POST[$counter]==$ans) {
			$result=$result+$marks;
			$correct=$correct+1;
		}
		else {
		  $wrong=$wrong+1;
		 if($neg==1)
			{
				$negative=$negative+1;
				$result=$result-1;
			}
		}
	}
	else {
		$miss=$miss+1;
	}
}
$sid=$_SESSION['sid'];
$sql="INSERT INTO result VALUES(?,?,?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param('isii',$testid,$sid,$result,$total);
$stmt->execute();

echo"<center><p>Test submitted Successfully<br>Here is your result-</p><br>
	<table border=1><tr><td><p> Correct </p></td><td style="."width:20%".">".$correct."</td></tr>
	<tr><td><p> Wrong </p></td><td style="."width:20%".">".$wrong."</td></tr>
	<tr><td><p> Negative out of Wrong </p></td><td style="."width:20%".">".$negative."</td></tr>
	<tr><td><p> Score </p></td><td style="."width:20%".">".$result."</td></tr></table></center>";

?>
</div>
</body>
</html>
