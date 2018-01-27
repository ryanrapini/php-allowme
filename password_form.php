<?php 
$config = include('allowme_config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $config['title'] ? $config['title'] : "php-allowme" ?></title>
	<style>
		.centered {
		    margin: 0 auto;
		    width: 200px;
		}
	</style>
</head>
<body>
	<div class="centered">
		<p>Enter the password to be granted access.</p>
		<form method="POST" action="index.php">
			Pass <input type="password" name="pass"></input><br/>
			<input type="submit" name="submit" value="Submit"></input>
		</form>
	</div>
</body>
</html>