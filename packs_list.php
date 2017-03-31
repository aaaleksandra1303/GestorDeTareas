<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de packs</title>
</head>
<body>
	<h1>Lista de packs</h1>
	<ul>
	<?php

		$string = file_get_contents("false_packs.json");
		$json_a = json_decode($string, true);
		foreach ($json_a as $key => $value) {
    		echo "<li>" . $key ."</li>";
    		
		}
	?>
	</ul>
</body>
</html>