<?php
session_start();
header ("Content-Type: text/html; charset=utf-8");
echo "<link rel='stylesheet' href='mystyle.css'>";

include "connection.php";

$FLAG = 0;

if(isset($_POST['button']))
{
	$_SESSION['NAME'] = $_POST["surename"];
	$PASS = $_POST["password"];

	$sql = 'SELECT name, pass FROM log';

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
		if($_SESSION['NAME'] == $row['name'] && $PASS == $row['pass'])
		{
			header ('Location: display.php');
			$FLAG = -1;
			exit();
		}	
	}
	if($FLAG == 0){
		header ('Location: wrong.php');
		unset ($_SESSION['NAME']);
		session_destroy();
	}
} 
mysqli_close($conn);
	
?>


<!DOCTYPE html>
<html>
	<head>
		<title>authorization</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">	
	</head>
	
	<body>
		<div id="main">
			<form name="authorization" class="authorization" method="post">

					<span class="string2">Enter your nickname</span>
					<input type="text" name="surename" placeholder="lowrider" required>
				
					<span class="string2">Enter your password</span>
					<input type="password" name="password" placeholder="********" required>															
				
					<span class="string2"><input type="submit" name="button" value="enter"></span>
				
					<a href="registration.php"><span class="string2"><input type="button" name="button2" value="regestration"></span></a>
				
					<div id="answer2"></div>
			
			</form>
		</div>
	</body>
</html>