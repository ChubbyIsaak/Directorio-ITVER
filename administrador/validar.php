<?php
function validaNombreUsuario($Dato)
{
    $pattern = "/^[a-z,0-9]{2,64}$/";
    if (preg_match($pattern, $Dato)) {
        return true;
    } else {
        return false;
    }
}

function validaNombreAdministrador($Dato)
{
    $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,32}$/";
    if (preg_match($pattern, $Dato)) {
        return true;
    } else {
        return false;
    }
}

function validaApellidosAdministrador($Dato)
{
    $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,64}$/";
    if (preg_match($pattern, $Dato)) {
        return true;
    } else {
        return false;
    }
}

function validaEmailAdministrador($Dato)
{
    if (filter_var($Dato, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

?>