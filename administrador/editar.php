<?php
    session_start();
    if(!isset($_SESSION['Logueado'])){
        # No esta logueado 
        header("Location: ../index.php");
    }
    require_once "validar.php";
    require_once "../bd/conexion.php";
    if(isset($_POST['btnEditar'])){
        # Obtenemos los datos capturados en variables de PHP.
        $NoEmpleado = $_POST["NoEmpleado"];
        $NombreEmpleado = $_POST["NombreEmpleado"];
        $ApellidosEmpleado = $_POST["ApellidosEmpleado"];
        $DepartamentoEmpleado = $_POST["DepartamentoEmpleado"];
        $PuestoEmpleado = $_POST["PuestoEmpleado"];
        $IngresoEmpleado = $_POST["IngresoEmpleado"];
        $TelefonoEmpleado = $_POST["TelefonoEmpleado"];
        $EmailEmpleado = $_POST["EmailEmpleado"];
        if(validaNoEmpleado($NoEmpleado) && validaNombreEmpleado($NombreEmpleado) 
        && validaApellidosEmpleado($ApellidosEmpleado) && validaEmailEmpleado($EmailEmpleado)){
            $SqlUpdate ="UPDATE empleados SET
            NombreEmpleado = '$NombreEmpleado',
            ApellidosEmpleado = '$ApellidosEmpleado',
            DepartamentoEmpleado = '$DepartamentoEmpleado',
            PuestoEmpleado = '$PuestoEmpleado',
            IngresoEmpleado = '$IngresoEmpleado',
            TelefonoEmpleado = '$TelefonoEmpleado',
            EmailEmpleado = '$EmailEmpleado'
            WHERE NoEmpleado = '$NoEmpleado'";
            $cn->query($SqlUpdate);
            header("Location: index.php");
        } else {
            $ErrorMensaje = "Conflictos con la Integridad de Datos...";
        }
    }
    
    if(isset($_GET['NoEmpleado'])){
        #El usuario llamo una edicion
        $NoEmpleado = $_GET['NoEmpleado'];
        $SqlSelect = "SELECT NoEmpleado, NombreEmpleado, ApellidosEmpleado, 
        DepartamentoEmpleado, PuestoEmpleado, IngresoEmpleado,
        TelefonoEmpleado, EmailEmpleado FROM empleados WHERE NoEmpleado='$NoEmpleado'";
        $ResultSet = $cn->query($SqlSelect);
        $row = $ResultSet->fetch_assoc();
        $NoEmpleado = $row['NoEmpleado'];
        $NombreEmpleado = $row['NombreEmpleado'];
        $ApellidosEmpleado = $row['ApellidosEmpleado'];
        $DepartamentoEmpleado = $row['DepartamentoEmpleado'];
        $PuestoEmpleado = $row['PuestoEmpleado'];
        $IngresoEmpleado = $row['IngresoEmpleado'];
        $TelefonoEmpleado = $row['TelefonoEmpleado'];
        $EmailEmpleado = $row['EmailEmpleado'];
    } else {
        header("Location: index.php");
    }
    require_once "../includes/header.php";
    require_once "editarforma.php";
    require_once "../includes/footer.php";
?>
