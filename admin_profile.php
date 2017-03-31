<?php
//Los nombres deben ir en inglés
//$Cliente vendrá de un archivo JSON.
// echo $tec['name'];
session_start();
//Comprobamos si la sesión está iniciada.
$logged = isset($_SESSION['admin']);
//Comprobamos si se ha pulsado el botón de cerrar sesión que hay en este propio
//archivo. Esto tiene uso más adelante.
$logout = isset($_POST['logout']);
//Aquí revisamos si nos llega algo vía POST del login.
//En caso de que se haya pulsado el botón de cerrar sesión,
//no se hace ninguna comprobación.
if(isset($_POST['admin']) && !$logout){
    //Leemos y convertimos en array el archivo json
    $string = file_get_contents("false_admin.json");
    $json_a = json_decode($string, true);
    //Comprobamos si el nombre que nos han pasado coincide con alguno de los que
    // tenemos registrados en el JSON
    foreach ($json_a as $key => $value) {
        //Si hay alguno...

        if($_POST['admin'] == $key){
            //Hacemos que tanto tanto el $_SESSION como el $tec tengan el valor
            //que se ha recibido por POST
            $_SESSION['admin'] = $admin = $_POST['admin'];
            //Esta variable controla si la sesión está iniciada.
            $logged = true;
            //Esta línea hace que se deje de ejecutar el bucle.
            //Una vez sabemos que el usuario que ha intentado iniciar sesión está
            //registrado, no hace falta que sigamos revisando nombres.
            break;
        }
    }
}
//Miramos si tenemos una sesión iniciada o si se ha pulsado el botón
//de cerrar sesión.
if($logged && !$logout){
    //Si hay una sesión iniciada, se pasan los datos para la página.
    $admin = $_SESSION['admin'];
}
else{
    //Si no hay sesión o se ha pulsado el botón de cerrar sesión.
    //Se cierra la sesión y se redirige al formulario de login.
    session_destroy();
    header('location:formAdmin.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $admin?> - Perfil</title>
</head>
<body>
    <p>Hola, <?= $admin?></p>
    <form method="POST">
        <input type="submit" name="logout" value="Cerrar sesión">
    </form>
    <table>
        <!-- Aquí irían los datos del admin. -->
    </table>
    Aquí va la lista de tareas: <br>
    <?php include 'tasks_list.php'; ?>

</body>
</html>