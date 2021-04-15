<?php
    if(isset($_POST['button'])){
        header ('Location: registration.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>wrongreg</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">	
	</head>
	
	<body>
		<div id="main">
			<form name="wrongreg" class="wrongreg" method="post">

					<span class="string2">This nickname is already taken, Please try another</span>														
				
					<span class="string2"><input type="submit" name="button" value="Ok"></span>                 				
		</form>
		</div>
	</body>
</html>