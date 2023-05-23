<?php
    require_once "../bd/conexion.php";
    $SqlSelect = "SELECT NoEmpleado, NombreEmpleado, ApellidosEmpleado, DepartamentoEmpleado,
    PuestoEmpleado, IngresoEmpleado, TelefonoEmpleado, EmailEmpleado FROM empleados";
    $ResultSet = $cn->query($SqlSelect);
    $tabla = "<table id='misdatos' class='table  table-striped table-bordered table-hover'>";
    $tabla.= "<thead class='table-dark'>";
    $tabla.= "<tr>";
    $tabla.= "<th>No.</th>";
    $tabla.= "<th>Nombre</th>";
    $tabla.= "<th>Apellidos</th>";
    $tabla.= "<th>Departamento</th>";
    $tabla.= "<th>Puesto</th>";
    $tabla.= "<th>Ingreso</th>";
    $tabla.= "<th>Telefono</th>";
    $tabla.= "<th>Email</th>";
    $tabla.= "<th>Editar</th>";
    $tabla.= "</tr>";
    $tabla.= "</thead>";
    $tabla.= "<tbody>";
    if($ResultSet->num_rows>0){
        while($row = $ResultSet->fetch_assoc()){
            $tabla.= "<tr>";
            $tabla.= "<td>".$row['NoEmpleado']."</td>";
            $tabla.= "<td>".$row['NombreEmpleado']."</td>";
            $tabla.= "<td>".$row['ApellidosEmpleado']."</td>";
            $tabla.= "<td>".$row['DepartamentoEmpleado']."</td>";
            $tabla.= "<td>".$row['PuestoEmpleado']."</td>";
            $tabla.= "<td>".$row['IngresoEmpleado']."</td>";
            $tabla.= "<td>".$row['TelefonoEmpleado']."</td>";
            $tabla.= "<td>".$row['EmailEmpleado']."</td>";
            $NoEmpleado = $row['NoEmpleado'];
            $tabla.= "<td><a href='editar.php?NoEmpleado=$NoEmpleado'>Editar</a></td>";
            $tabla.= "</tr>";
        }
    } else {
        $tabla.= "<tr>";
        $tabla.= "<th colspan='5'>NO  HAY DATOS A MOSTRAR</th>";
        $tabla.= "</tr>";
    }
    $tabla.= "</tbody>";
    $tabla.= "</table>";

?>

