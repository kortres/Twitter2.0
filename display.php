<?php

session_start();
header ("Content-Type: text/html; charset=utf-8");
echo "<link rel='stylesheet' href='mystyle.css'>";

include "connection.php";

if(!isset($_SESSION['NAME'])){
	unset ($_SESSION['NAME']);
	session_destroy();
	header ('Location: authorization.php');
	exit(); 
}

if(isset($_POST['button2']))
{
	$NAME = $_SESSION['NAME'];
	$TEXT = $_POST["comment"];
	$sql = "INSERT INTO message (Name, Message) VALUES ('$NAME', '$TEXT')";	mysqli_query($conn, $sql);
	header ('Location: display.php'); 	
	unset($_POST);
	exit();
}

mysqli_close($conn);

if(isset($_POST['log_out'])){
	unset ($_SESSION['NAME']);
	session_destroy();
	header ('Location: authorization.php');
	exit(); 
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>display</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">
		<script type="text/javascript" src="jquery.js"></script>
		<script>
		function show()  
        {  
            $.ajax({  
                url: "ajax.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }  
      
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        });  
				
		</script>  	
	</head>
	
	<body>
		<div id="main">
			<form name="display" class="display"  method="post">
				<span class="string4">Message</span>
							
				<textarea class ="textaredisplay"  id = "content" name="display" cols="68" rows="44" disabled></textarea>

				<div id =answer></div>	

				<textarea class ="textare" name="comment" cols="68" rows="7"></textarea></p>

				<span class="string"><input type="submit" name="log_out" value="log out"></span>
				
				<span class="string"><input type="submit" name="button2" value="send"></span>
							
			</form>
		</div>
	</body>
</html>