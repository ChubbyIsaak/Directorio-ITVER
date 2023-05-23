<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header bg-darkcyan text-white text-center">
                <h2>
                    Registro de Nuevos Empleados

                </h2>
            </div>
            <div class="card-body">
                <!-- Formulario de registro de Empleados -->
                <form action="insertar.php" method="post" autocomplete="true">
                    <div class="form-group">
                        <label for="NoEmpleado" class="form-label">Numero de Empleado</label>
                        <input type="text" class="form-control" id="NoEmpleado" name="NoEmpleado" required
                            pattern="^[0-9]{2,8}$" value="<?php echo $NoEmpleado; ?>" title="Numero de Empleado"
                            placeholder="Numero de empleado">
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
                        <input type="text" class="form-control" id="DepartamentoEmpleado" name="PuestoEmpleado" required
                            pattern="^[A-ZÑÁÉÍÓÚ ]{2,32}$" value="<?php echo $PuestoEmpleado; ?>" title="Puesto"
                            placeholder="Puesto">
                    </div>
                    <div class="form-group">
                        <label for="IngresoEmpleado" class="form-label">Fecha de Ingreso</label>
                        <input type="date" class="form-control" id="ingresoEmpleado" name="IngresoEmpleado" required
                            pattern="\d{2}/\d{2}/\d{4}" value="<?php echo $PuestoEmpleado; ?>" title="Fecha de Ingreso"
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
                    <div class="form-group">
                        <label for="PasswordEmpleado" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="PasswordEmpleado" name="PasswordEmpleado"
                            required title="Captura tu Contraseña Personal"
                            placeholder="Captura tu Contraseña Personal">
                    </div>
                    <div class="form-group">
                        <a href="index.php" class="btn btn-dark-cyan">CANCELAR</a>
                    </div>
                    <div class="boton text-end">
                        <input type="submit" value="SOLICITAR REGISTRO" id="btnInsertar" name="btnInsertar"
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