<?php
    if(isset($_POST['button'])){
        header ('Location: authorization.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>wrong</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">	
	</head>
	
	<body>
		<div id="main">
			<form name="wrong" class="wrong" method="post">

					<span class="string2">Wrong password or login, pls try again</span>														
				
					<span class="string2"><input type="submit" name="button" value="Ok"></span>                 				
		</form>
		</div>
	</body>
</html>