<html>
<body>
<?php
session_start();
$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ERP";
// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);
$f = 1;
if (empty($_POST["oldPswd"])) { $f = 0; }
if (empty($_POST["newPswd"])) { $f = 0; }
if ($f == 1) {
if(isset($_POST['studentPwd'])){
$sql = "UPDATE student SET pwd = ? WHERE s_id = ? AND pwd = ?";
$stmt = $conn->prepare($sql);
$usrNm = $_SESSION['userID'];
$pswdOld = checkData($_POST["oldPswd"]);
$pswdNew = checkData($_POST["newPswd"]);
$stmt->bind_param('sss', $pswdNew, $usrNm, $pswdOld);
$stmt->execute();
if($stmt->affected_rows) {
echo "<h3> Password successfully changed </h3>" ;
include "homeOptional.php";
}
}
else if(isset($_POST['teacherPwd'])){
$sql = "UPDATE teacher SET pwd = ? WHERE t_id = ? AND pwd = ?";
$stmt = $conn->prepare($sql);
$pswdOld = checkData($_POST["oldPswd"]);
$pswdNew = checkData($_POST["newPswd"]);
$stmt->bind_param('sss', $pswdNew, $_SESSION['userID'], $pswdOld);
$stmt->execute();
if($stmt->affected_rows) {
echo "<h3> Password successfully changed </h3>" ;
include "homeOptionalT.php";
}
}
 else {echo "<br><br>Either the provided old password is incorrect or the mandatory fields
are not provided.";
};
}
function checkData($d) {
return trim($d);
}
?>
</body>
</html>
