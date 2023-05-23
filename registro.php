<?php
function validaNombreUsuario($NombreUsuario)
{
    $pattern = "/^[0-9]{2,8}$/";
    if (preg_match($pattern, $NombreUsuario)) {
        return true;
    } else {
        return false;
    }
}

function validaNombreAdministrador($NombreAdministrador)
{
    $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,32}$/";
    if (preg_match($pattern, $NombreAdministrador)) {
        return true;
    } else {
        return false;
    }
}

require_once "includes/header.php";
if (isset($_POST["btnRegistrar"])) {

    # Obtenemos los datos capturados en variables de PHP.
    $NombreUsuario = $_POST["NombreUsuario"];
    $NombreAdministrador = $_POST["NombreAdministrador"];
    $ApellidosAdministrador = $_POST["ApellidosAdministrador"];
    $EmailAdministrador = $_POST["EmailAdministrador"];
    $PasswordAdministrador = $_POST["PasswordAdministrador"];

    if (validaNombreUsuario($NombreUsuario) && validaNombreAdministrador($NombreAdministrador)) {
        require_once "bd/conexion.php";
        try {
            $SqlInsert = "INSERT INTO Empleados VALUES('$NombreUsuario', '$NombreAdministrador', 
            '$ApellidosAdministrador', '$EmailAdministrador','$PasswordAdministrador',1)";
            $cn->query($SqlInsert);
            header("Location: index.php");
        } catch (Exception $e) {
            echo "Error de Base de Datos ... Llame a TI";
        }
    } else {
        echo "Ups ... esta mal mal";
    }
} else {
    # Se carga la pagina por primera vez
    $NombreUsuario = "";
    $NombreAdministrador = "";
    $ApellidosAdministrador = "";
    $EmailAdministrador = "";
    $PasswordAdministrador = "";
}
require_once "registroforma.php";
require_once "includes/footer.php";
?>