<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error) {
	die("Connection Failed:".$conn->connect_error);
}

mysqli_select_db($conn,"ERP");
?>
