<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header bg-darkcyan text-white text-center">
                <h2>
                    Editar Empleados
                </h2>
            </div>
            <div class="card-body">
                <!-- Formulario de registro de Empleados -->
                <form action="editar.php" method="post" autocomplete="true">
                    <div class="form-group">
                        <label for="NoEmpleado" class="form-label">Numero de Empleado</label>
                        <input type="text" class="form-control" id="NoEmpleado" name="NoEmpleado" required
                            pattern="^[0-9]{2,8}$" value="<?php echo $NoEmpleado; ?>" readonly
                            title="Numero de Empleado" placeholder="Numero de empleado">
                    </div>
                    <div class="form-group">
                        <label for="NombreEmpleado" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="NombreEmpleado" Name="NombreEmpleado"
                            value="<?php echo $NombreEmpleado; ?>"
                            placeholder="ESCRIBA SU NOMBRE USANDO SOLO MAYUSCULAS"
                            title="ESCRIBA SU NOMBRE USANDO SOLO MAYUSCULAS " required pattern="^[A-ZÑÁÉÍÓÚ ]{2,32}$">
                    </div>
                    <div class="form-group">
                        <label for="ApellidosEmpleado" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="ApellidosEmpleado" Name="ApellidosEmpleado"
                            value="<?php echo $ApellidosEmpleado; ?>"
                            placeholder="ESCRIBA SUS APELLIDOS USANDO SOLO MAYUSCULAS"
                            title="ESCRIBA SUS APELLIDOS USANDO SOLO MAYUSCULAS " required
                            pattern="^[A-ZÑÁÉÍÓÚ ]{2,64}$">
                    </div>
                    <div class="form-group">
                        <label for="DepartamentoEmpleado" class="form-label">Departamento</label>
                        <input type="text" class="form-control" id="DepartamentoEmpleado" name="DepartamentoEmpleado"
                            required pattern="^[A-ZÑÁÉÍÓÚ ]{2,32}$" value="<?php echo $DepartamentoEmpleado; ?>"
                            title="Departamento" placeholder="Departamento">
                    </div>
                    <div class="form-group">
                        <label for="PuestoEmpleado" class="form-label">Puesto</label>
                        <input type="text" class="form-control" id="PuestoEmpleado" name="PuestoEmpleado" required
                            pattern="^[A-ZÑÁÉÍÓÚ ]{2,32}$" value="<?php echo $PuestoEmpleado; ?>" title="Puesto"
                            placeholder="Puesto">
                    </div>
                    <div class="form-group">
                        <label for="IngresoEmpleado" class="form-label">Fecha de Ingreso</label>
                        <input type="date" class="form-control" id="IngresoEmpleado" name="IngresoEmpleado" required
                            pattern="\d{2}/\d{2}/\d{4}" value="<?php echo $IngresoEmpleado; ?>" title="Fecha de Ingreso"
                            placeholder="Fecha de ingreso">
                    </div>
                    <div class="form-group">
                        <label for="TelefonoEmpleado" class="form-label">Numero de Telefono</label>
                        <input type="text" class="form-control" id="TelefonoEmpleado" name="TelefonoEmpleado" required
                            pattern="^[0-9]{10}$" value="<?php echo $TelefonoEmpleado; ?>" title="Numero Telefono: "
                            placeholder="Numero de Telefono">
                    </div>
                    <div class="form-group">
                        <label for="EmailEmpleado" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="EmailEmpleado" name="EmailEmpleado" required
                            value="<?php echo $EmailEmpleado; ?>" title="Correo Electronico Empresarial: "
                            placeholder="Correo Electronico Empresarial">
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-dark-cyan">CANCELAR</a>
                    </div>

                    <div class="boton text-end" class="btn btn-dark-cyan">
                        <input type="submit" value="GUARDAR CAMBIOS" id="btnEditar" name="btnEditar"
                            class="btn btn-info mt-3 me-2">
                    </div>
                </form>
                <?php
                if (isset($ErrorMensaje)) {
                    echo "<div class='alert alert-danger'>$ErrorMensaje</div>";
                }
                ?>
            </div>
            <div class="card-footer bg-darkcyan text-white text-center">
                <h6>&copy; Mayo 2023</h6>
            </div>
        </div>
    </div>
</div>