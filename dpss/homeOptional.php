<html>
<?php  
echo "<head>
<title>"?><?php echo $_SESSION['name']; echo"</title>
<style>
#header {
    background-color:black;
    color:white;
    padding:5px;
}
#head{
background-color:black;
    color:white;
    padding-right:25px;    height:40px;

}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:500px;
    width:200px;
    float:left;
    padding:5px;	      
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#extra{
margin-left:30px;
height:100px;

}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	
   margin-bottom:0px; 
   height:120px;	 
}
</style>
</head>
<body>

<div id='header'>
<h1  style='text-align:center';>Hello,";?><?php echo $_SESSION['name']; echo"</h1></div>

<div id='head'>
 <a href='logout.php' style='float:right;text-decoration: none;'> Logout </a>
   <pre style='float:right'>   </pre>
 <a href='fee.php' style='float:right;text-decoration: none;'> Fee Challan </a>
  <pre style='float:right'>   </pre>
 <a href='chat.php' style='float:right;text-decoration: none;'> E-mail </a>
 <pre style='float:right'>   </pre>
 <a href='profile.php' style='float:right;text-decoration: none;'> Profile </a>
 
 
</div>
<div id='nav'><img src='online.jpeg' style='height:12px;width:12px;'>
";?><?php echo $_SESSION['name']; echo"<br>
<a href='changePasswrd.html'>Change Password</a><br>
<a href='update.html'>Update details</a><br>
<a href='test1.php'>Test</a><br>
</div>

<div id='section'>
<h2></h2>
<p></p>
</div>

<div id='footer' >
<table>
<tr><td>

<pre style='float:left;text-decoration: none;padding-right:25px;color:white;'>Contact Us:</pre></td>
<a href='#' style='float:right;text-decoration: none;padding-right:25px;'>Admissions</a></td>
<a href='#' style='float:right;text-decoration: none;padding-right:25px;'>About Developers</a></td>
<a href='#' style='float:right;text-decoration: none;padding-right:25px;'>Privacy Policy</a></td>
</tr>
<tr>
<td style='color:white;'>
Prabha Bhawan,<br>
2nd floor,<br>
MNIT Jaipur<br>
</td>
</tr>
</table>
<a href='#' style='text-decoration: none;padding-right:25px;'>Developer : Deepshi Jain, Divyam Jain, Deepak Prakash Sorari</a>
</div>
</body>
";

?>
</html>




