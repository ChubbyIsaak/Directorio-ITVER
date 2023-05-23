<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="doc/__static/normalize.css">
    <link rel="shortcut icon" href="doc/__images/favicon.png" <link rel="preconnect"
        href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Krub&family=Staatliches&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="doc/__static/styles.css">

</head>

<body>

</body>

</html>
<?php
session_start();
if (isset($_SESSION['Logueado'])) {
    header("Location: main/index.php");
}

require_once "includes/header.php";
if (isset($_POST['btnLogin'])) {
    # Envio solicitud
    $NombreUsuario = $_POST['NombreUsuario'];
    $PasswordAdministrador = $_POST['PasswordAdministrador'];
    $SqlLogin = "SELECT NombreUsuario, NombreAdministrador, ApellidosAdministrador FROM administradores
        WHERE NombreUsuario = '$NombreUsuario' and PasswordAdministrador = '$PasswordAdministrador'";
    require_once "bd/conexion.php";
    $ResultSet = $cn->query($SqlLogin);
    if ($ResultSet->num_rows > 0) {
        $row = $ResultSet->fetch_assoc();
        $_SESSION['Logueado'] = true;
        $_SESSION['NombreUsuario'] = $row['NombreUsuario'];
        $_SESSION['NombreUsuario'] = $row['NombreAdministrador'] . " " . $row['ApellidosAdministrador'];
        header("Location: C:\xampp\htdocs\Directorio ITVER/doc/index.html");
    } else {
        $ErrorMensaje = "CREDENCIALES NO VALIDAS!!!";
    }
}
require_once "indexforma.php";
require_once "includes/footer.php";
?>
<!DOCTYPE html>