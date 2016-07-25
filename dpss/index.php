<?php 
session_start();

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ERP";
// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
		if ($conn->connect_error) { 
		}
		$un=$_POST['uname'];
		$pwd=$_POST['pass'];	
		
		$_SESSION['userID']=$un;
$_SESSION['password']=$pwd;
$query = "SELECT * FROM student WHERE s_id=? && pwd=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss",$un,$pwd);
$stmt->execute();
		$stmt->bind_result($_SESSION['userID'],$_SESSION['name'],$_SESSION['phno'],$_SESSION['branch'],$_SESSION['join_yr'],$_SESSION['curryear'],$_SESSION['email'],$_SESSION['password'],$_SESSION['Profile_pic'],$_SESSION['info'],$_SESSION['edu'],$_SESSION['skills'],$_SESSION['experience']);
		
		if($stmt->fetch()==0){
				$query = "SELECT * FROM teacher WHERE t_id=? && pwd=?";
				$stmt = $conn->prepare($query);
				$stmt->bind_param("ss",$un,$pwd);
				$stmt->execute();
				$stmt->bind_result($_SESSION['userID'],$_SESSION['name'],$_SESSION['phno'],$_SESSION['branch'],$_SESSION['join_yr'],$_SESSION['email'],$_SESSION['password'],$_SESSION['Profile_pic']);//here join year is dpt_code and branch id dpt
				if($stmt->fetch()==0){
					echo 'No match Found';
				}
				else{
					header("Location:homeT.php");
   				exit;
				}
			}	
	else{
	header("Location:home.php");
   exit;
   }
	}
}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IIIT KOTA ERP</title>
<link href="./css/style.css" rel="stylesheet">
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<style>
body{
background-image:url("bg.jpg");
background-repeat:repeat-x;
}
</style>
</head>
<body >


<br>
<br>
<br>
<br>
<br>
<br>
<form action="" method="post" name="form1" id="form1" >
  <table width="400"  border="0" align="center" cellpadding="5" cellspacing="1" class="table">

<tr>
      <td align="right" valign="top"> <img src="logo.png" style="width:120px;height 120px "></td>
      <td>Enter your details:<hr>
   
        <br>
        <input type="text" name="uname" placeholder="username"/><br>
<input type="password" name="pass" placeholder="password"/>
        <br>
        </td>
    </tr>
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><a href="newUser.html">New User? Sign Up</a></td>
    </tr>
  </table>
</form>
</body>
</html>
