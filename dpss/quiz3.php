<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test-Creation_From</title>
</head>
<body>
	<?php
	$testname=$_SESSION['testname'];		
	$testid=$_SESSION['testid'];
	echo "<center><h1>".$testname." (id : ".$testid.") </h1></center>";
	?>
	<br>	
	<form name="question" action="quiz4.php" method="post">
	<p>Que. No. <input type="number" name="queno" id="queno" min=1></p>
	<p>Question:</p>
	<textarea rows="10" cols="150" name="ques"></textarea>
	<br><br>
	<table>

	<tr>
	<td>(1)</td>
	<td><input type="text" name="op1" id="op1"></td>
	<td><pre>       </pre></td>
	<td>(2)</td>
	<td><input type="text" name="op2" id="op2"></td>
	</tr>
	
	<tr>
	<td>(3)</td>
	<td><input type="text" name="op3" id="op3"></td>
	<td><pre>       </pre></td>
	<td>(4)</td>
	<td><input type="text" name="op4" id="op4"></td>
	</tr>
	
	<tr>
	<td colspan=4></td>
	</tr>

	<tr>
	<td colspan=2>Correct Answer</td>
	<td colspan=2><input type="number" name="ans" id="ans" min=1 max=4></td>
	</tr>
	
	</table>
	
	<p>Marks: <input type="number" name="marks" id="marks" min=1></p>
	<p><input type="checkbox" name="neg" value="1">Negative</input></p>

	<center><table>
	<td><button type="submit" name="nq" id="nq">Next Question</button></td>
	<td><pre>       </pre></td>
	<td><button type="submit" name="ct" id="ct">Complete Test</button></td>
	</table></center>

</body>
</html>
