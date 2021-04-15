<?php
    if(isset($_POST['button'])){
        header ('Location: authorization.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>regcomplete</title>
		<meta charset = "utf-8">
		<link href = "css/mystyle.css" rel = "stylesheet" type = "text/css">	
	</head>
	
	<body>
		<div id="main">
			<form name="regcomplete" class="regcomplete" method="post">

					<span class="string2">Registration successful</span>														
				
					<span class="string2"><input type="submit" name="button" value="Ok"></span>                 				
		</form>
		</div>
	</body>
</html>