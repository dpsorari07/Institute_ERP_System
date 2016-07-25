<?php
session_start();
include'conn.php';

$phno=$_POST['phno'];
$prof=$_POST['prof'];
$edu=$_POST['edu'];
$exp=$_POST['exp'];
$pwd=$_POST['pwd'];

$sid=$_SESSION['userID'];

$sql="UPDATE student SET phno=?,Profile=?,Education=?,Experience=?,pwd=? WHERE s_id=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ssssss',$phno,$prof,$edu,$exp,$pwd,$sid);
$stmt->execute();

echo" <center><h2>Your Details are updated successfully</h2></center> ";
?>
