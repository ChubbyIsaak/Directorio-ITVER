<?php
    session_start();
    if(!isset($_SESSION['Logueado'])){
        # No esta logueado 
        header("Location: ../index.php");
    }

    require_once "validar.php";
    require_once "../bd/conexion.php";
    require_once "../includes/header.php";
    if(isset($_POST['btnInsertar'])){
        $NoEmpleado = $_POST["NoEmpleado"];
        $NombreEmpleado = $_POST["NombreEmpleado"];
        $ApellidosEmpleado = $_POST["ApellidosEmpleado"];
        $DepartamentoEmpleado = $_POST["DepartamentoEmpleado"];
        $PuestoEmpleado = $_POST["PuestoEmpleado"];
        $IngresoEmpleado = $_POST["IngresoEmpleado"];
        $TelefonoEmpleado = $_POST["TelefonoEmpleado"];
        $EmailEmpleado = $_POST["EmailEmpleado"];
        $PasswordEmpleado = $_POST['PasswordEmpleado'];
        if(validaNoEmpleado($NoEmpleado) && validaNombreEmpleado($NombreEmpleado) 
        && validaApellidosEmpleado($ApellidosEmpleado) && validaEmailEmpleado($EmailEmpleado)){
            $SqlInsert = "INSERT INTO empleados VALUES('$NoEmpleado', 
            '$NombreEmpleado', '$ApellidosEmpleado', '$DepartamentoEmpleado','$PuestoEmpleado',
            '$IngresoEmpleado','$TelefonoEmpleado', '$EmailEmpleado', '$PasswordEmpleado', 1)";
            $cn->query($SqlInsert);
            header("Location: index.php");
        } else {
            $ErrorMensaje = "Conflictos con la Integridad de Datos...";
        }

    } else {
        $NoEmpleado = "";
        $NombreEmpleado = "";
        $ApellidosEmpleado = "";
        $DepartamentoEmpleado = "";
        $PuestoEmpleado = "";
        $IngresoEmpleado = "";
        $TelefonoEmpleado = "";
        $EmailEmpleado = "";
        $PasswordEmpleado = "";
    }
    require_once "insertarforma.php";
    require_once "../includes/footer.php";
?>