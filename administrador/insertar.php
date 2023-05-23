<?php
session_start();
if (!isset($_SESSION['Logueado'])) {
    # No esta logueado 
    header("Location: ../index.php");
}

require_once "validar.php";
require_once "../bd/conexion.php";
require_once "../includes/header.php";
if (isset($_POST['btnInsertar'])) {
    $NombreUsuario = $_POST["NombreUsuario"];
    $NombreAdministrador = $_POST["NombreAdministrador"];
    $ApellidosAdministrador = $_POST["ApellidosAdministrador"];
    $EmailAdministrador = $_POST["EmailAdministrador"];
    $PasswordAdministrador = $_POST['PasswordAdministrador'];
    if (
        validaNombreUsuario($NombreUsuario) && validaNombreAdministrador($NombreAdministrador)
        && validaApellidosAdministrador($ApellidosAdministrador) && validaEmailAdministrador($EmailAdministrador)
    ) {
        $SqlInsert = "INSERT INTO administrador VALUES('$NombreUsuario', 
            '$NombreAdministrador', '$ApellidosAdministrador','$EmailAdministrador', '$PasswordAdministrador', 1)";
        $cn->query($SqlInsert);
        header("Location: index.php");
    } else {
        $ErrorMensaje = "Conflictos con la Integridad de Datos...";
    }

} else {
    $NombreUsuario = "";
    $NombreAdministrador = "";
    $ApellidosAdministrador = "";
    $EmailAdministrador = "";
    $PasswordAdministrador = "";
}
require_once "insertarforma.php";
require_once "../includes/footer.php";
?>