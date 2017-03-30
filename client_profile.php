<?php
//Los nombres deben ir en inglés
//$Cliente vendrá de un archivo JSON.

// echo $client['name'];

session_start();

$logged = isset($_SESSION['user']);
$logout = isset($_POST['logout']);

if(isset($_POST['user']) && !$logout){
	$string = file_get_contents("clientes_falsos.json");
	$json_a = json_decode($string, true);
	foreach ($json_a as $key => $value) {
		if($_POST['user'] == $key){
			$_SESSION['user'] = $client = $_POST['user'];
			$logged = true;
			break;
		}
		else{
			$client =  $_POST['user']. ", no estás registrado." ;
		}

	}
}

if($logged && !$logout){
	$client = $_SESSION['user'];
}
else{
	session_destroy();
	header('location:formClient.php');
	die();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $client?> - Perfil</title>
</head>
<body>
	<p>Hola, <?= $client?></p>
	<form method="POST">
		<input type="submit" name="logout" value="Cerrar sesión">
	</form>
	<table>
		<!-- Aquí irían los datos del cliente. -->
	</table>
	<table>
		<!-- Aquí irían las tareas del cliente -->
	</table>
</body>
</html>