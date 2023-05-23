<?php
require_once "../bd/conexion.php";
$SqlSelect = "SELECT NombreUsuario, NombreAdministrador, ApellidosAdministrador, EmailEmpleado FROM administradores";
$ResultSet = $cn->query($SqlSelect);
$tabla = "<table id='administradores' class='table  table-striped table-bordered table-hover'>";
$tabla .= "<thead class='table-dark'>";
$tabla .= "<tr>";
$tabla .= "<th>No.</th>";
$tabla .= "<th>Nombre</th>";
$tabla .= "<th>Apellidos</th>";
$tabla .= "<th>Email</th>";
$tabla .= "<th>Editar</th>";
$tabla .= "</tr>";
$tabla .= "</thead>";
$tabla .= "<tbody>";
if ($ResultSet->num_rows > 0) {
    while ($row = $ResultSet->fetch_assoc()) {
        $tabla .= "<tr>";
        $tabla .= "<td>" . $row['NombreUsuario'] . "</td>";
        $tabla .= "<td>" . $row['NombreAdministrador'] . "</td>";
        $tabla .= "<td>" . $row['ApellidosAdministrador'] . "</td>";
        $tabla .= "<td>" . $row['EmailAdministrador'] . "</td>";
        $NombreUsuario = $row['NombreUsuario'];
        $tabla .= "<td><a href='editar.php?NoEmpleado=$NombreUsuario'>Editar</a></td>";
        $tabla .= "</tr>";
    }
} else {
    $tabla .= "<tr>";
    $tabla .= "<th colspan='5'>NO  HAY DATOS A MOSTRAR</th>";
    $tabla .= "</tr>";
}
$tabla .= "</tbody>";
$tabla .= "</table>";

?>