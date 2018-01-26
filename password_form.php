<?php 
	$config = include('allowme_config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $config['title'] ? $config['title'] : "php-allowme" ?></title>
</head>
<body>
	<form method="POST" action="index.php">
        Pass <input type="password" name="pass"></input><br/>
        <input type="submit" name="submit" value="Go"></input>
	</form>
</body>
</html>