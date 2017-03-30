<?php
//Los nombres deben ir en inglés
//$Cliente vendrá de un archivo JSON.
$string = file_get_contents("clientes_falsos.json");
$json_a = json_decode($string, true);
foreach ($json_a as $key => $value) {
	if($_POST['user'] == $key){
		$client = $_POST['user'];
		break;
	}
	else{
		$client =  $_POST['user']. ", no estás registrado." ;
	}

}
// echo $client['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $client?> - Perfil</title>
</head>
<body>
	<p>Hola, <?= $client?></p>
	<table>
		<!-- Aquí irían los datos del cliente. -->
	</table>
	<table>
		<!-- Aquí irían las tareas del cliente -->
	</table>
</body>
</html>