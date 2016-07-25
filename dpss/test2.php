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
$sid=$_POST['sid'];
$_SESSION['sid']=$sid;

include'conn.php';
$sql="SELECT name FROM student WHERE s_id LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('s',$sid);
$stmt->execute();
$stmt->bind_result($name);
while($stmt->fetch()) {
	echo"<p>Welcome, ".$name."</p>";
}
$_SESSION['name']=$name;
$testid=$_POST['tid'];
$_SESSION['testid']=$testid;

$sql="SELECT test_name FROM test WHERE id LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('i',$testid);
$stmt->execute();
$stmt->bind_result($testname);
while($stmt->fetch()) {
	echo"<center><h2>".$testname."</h2></center><hr><hr><br>";
}

$sql="SELECT que_no,ques,op_one,op_two,op_three,op_four FROM question WHERE tid LIKE ?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('i',$testid);
$stmt->execute();
$stmt->bind_result($queno,$que,$op1,$op2,$op3,$op4);

echo"<form name="."test"." action="."test3.php"." method="."post"."><table>";

while($stmt->fetch()) {
	echo"<tr><td colspan=3>Que-".$queno." ".$que."</td></tr>";
	echo"<tr><td><input type="."radio"." name=\"".$queno."\" value="."1".">".$op1."</input></td><td><pre>       </pre></td><td><input type="."radio"." name=\"".$queno."\" value="."2".">".$op2."</input></td></tr>";
	echo"<tr><td><input type="."radio"." name=\"".$queno."\" value="."3".">".$op3."</input></td><td><pre>       </pre></td><td><input type="."radio"." name=\"".$queno."\" value="."4".">".$op4."</input></td></tr>";

	echo"<tr><td colspan=3><pre>   </pre></td></tr>";

}
echo"</table><br><br><center><button type="."submit"." name="."testsubmit"." id="."testsubmit".">SUBMIT  TEST</button></center></form>";
?>
</div>
</body>
</html>
