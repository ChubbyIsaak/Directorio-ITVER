<?php   
    function validaNoAdministrador($NoAdministrador){
        $pattern = "/^[0-9]{2,8}$/";
        if(preg_match($pattern,$NoAdministrador)){
            return true;
        } else {
            return false;
        }
    }

    function validaNombreEmpleado($NombreEmpleado){
        $pattern = "/^[A-ZÑÁÉÍÓÚ ]{2,32}$/";
        if(preg_match($pattern, $NombreEmpleado)){
            return true;
        } else {
            return false;
        }
    }

    require_once "includes/header.php";
    if(isset($_POST["btnRegistrar"])){

        # Obtenemos los datos capturados en variables de PHP.
        $NoEmpleado = $_POST["NoEmpleado"];
        $NombreEmpleado = $_POST["NombreEmpleado"];
        $ApellidosEmpleado = $_POST["ApellidosEmpleado"];
        $DepartamentoEmpleado=$_POST["DepartamentoEmpleado"];
        $PuestoEmpleado=$_POST["PuestoEmpleado"];
        $IngresoEmpleado=$_POST["IngresoEmpleado"];
        $TelefonoEmpleado = $_POST["TelefonoEmpleado"];
        $EmailEmpleado = $_POST["EmailEmpleado"];
        $PasswordEmpleado = $_POST["PasswordEmpleado"];

        if(validaNoEmpleado($NoEmpleado) && validaNombreEmpleado($NombreEmpleado)){
            require_once "bd/conexion.php";
            try {
                $SqlInsert = "INSERT INTO Empleados VALUES('$NoEmpleado', '$NombreEmpleado', 
                '$ApellidosEmpleado', '$DepartamentoEmpleado','$PuestoEmpleado',
                '$IngresoEmpleado','$TelefonoEmpleado', '$EmailEmpleado','$PasswordEmpleado',1)";
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
        $NoEmpleado = "";
        $NombreEmpleado = "";
        $ApellidosEmpleado = "";
        $DepartamentoEmpleado="";
        $PuestoEmpleado="";
        $IngresoEmpleado="";
        $TelefonoEmpleado = "";
        $EmailEmpleado = "";
        $PasswordEmpleado = "";
    }
    require_once "registroforma.php";
    require_once "includes/footer.php";
?>
