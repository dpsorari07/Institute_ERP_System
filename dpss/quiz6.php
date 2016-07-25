<?php
session_start();
$flag=1;
include'conn.php';
if(isset($_POST['neg'])) {
	$neg=1;
}
else {
	$neg=0;
}
if(isset($_POST['queno']) && isset($_POST['ques']) && isset($_POST['op1']) && isset($_POST['op2']) && isset($_POST['op3']) && isset($_POST['op4']) && isset($_POST['ans']) && isset($_POST['marks'])) {
	
	$testid=$_SESSION['testid'];
	$queno=$_POST['queno'];
	$ques=$_POST['ques'];
	$op1=$_POST['op1'];
	$op2=$_POST['op2'];
	$op3=$_POST['op3'];
	$op4=$_POST['op4'];
	$ans=$_POST['ans'];
	$marks=$_POST['marks'];
	
	$sql="INSERT INTO question VALUES(?,?,?,?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('iisssssiii',$testid,$queno,$ques,$op1,$op2,$op3,$op4,$ans,$marks,$neg);
	if($stmt->execute()) {
		echo"Previous question saved.";
	}
	else {
		echo"There is some problem while saving this question.Please TRY AGAIN....";
	}

	if(isset($_POST['nq'])) {
		include'quiz7.php';
	}
	else
	if(isset($_POST['ct'])) {
		include'quiz8.php';
	}

	
}
else {
	$flag=0;
	echo"All the fields except 'negative' field are mendatory.";
}	
	
	

