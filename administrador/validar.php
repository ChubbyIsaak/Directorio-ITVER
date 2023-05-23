<?php
    function validaNoEmpleado($Dato){
        $pattern = "/^[0-9]{2,8}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaNombreEmpleado($Dato){
        $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,32}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaApellidosEmpleado($Dato){
        $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,64}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaDepartamentoEmpleado($Dato){
        $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,64}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaPuestoEmpleado($Dato){
        $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,64}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaIngresoEmpleado($Dato){
        $pattern="\d{2}/\d{2}/\d{4}";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaTelefonoEmpleado($Dato){
        $pattern = "/^[0-9]{10,10}$/";
        if(preg_match($pattern, $Dato)){
            return true;
        } else {
            return false;
        }
    }

    function validaEmailEmpleado($Dato){
        if (filter_var($Dato, FILTER_VALIDATE_EMAIL)) {
            return true;
          } else {
            return false;
          }
    }

?>