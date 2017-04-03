<?php
	if (isset($_POST['title'])) {
		$string = file_get_contents("false_tasks.json");
		var_dump($string);
		echo "<br>";
		$json_a = json_decode($string, true);
		$json_a[$_POST['title']] = array();
		var_dump($json_a);
		echo "<br>";
		$json_a = json_encode($json_a);
		var_dump($json_a);
		file_put_contents("false_tasks.json", $json_a);
	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		Título de la tarea: <input type="text" name="title" placeholder="Título de la tarea">
		<input type="submit" name="submit">

	</form>
</body>
</html>