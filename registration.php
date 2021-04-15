<?php

header ("Content-Type: text/html; charset=utf-8");
echo "<link rel='stylesheet' href='mystyle.css'>";

include "connection.php";

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if(isset($_POST['button']))
{
	$NAME = $_POST["surname"];
	$PASS = $_POST["password"];
	$AGE = $_POST["old"];

	$sql = "INSERT INTO log (Name, Pass, Age) VALUES ('$NAME', '$PASS', '$AGE')";
	if (mysqli_query($conn, $sql)) {

		header ('Location: regcomplete.php');  
   		exit();
	}
	else {
		header ('Location: wrongreg.php');
		exit();  
	}
} 
mysqli_close($conn)

?>

<!DOCTYPE html>
<html>
	<head>
		<title>registration</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">	
	</head>
	
	<body>
		<div id="main">
			<form name="registration" class="registration" method="post">
				
					<span class="string">Enter your nickname</span>

					<input type="text" name="surname" placeholder="lowrider" required>
				
					<span class="string">Enter your password</span>
					<input type="password" name="password" placeholder="********" required>				
								
					<span class="string">Enter your age</span>
					<input type="number" name="old" placeholder="18" required>				
				
					<span class="string"><input type="submit" value="confirm" name="button"></span>
				
					<a href="authorization.php"><span class="string"><input type="button" name="button2" value="log screen"></span></a>
				
					<div id="answer"></div>	
							
			</form>
		</div>
	</body>
</html>

