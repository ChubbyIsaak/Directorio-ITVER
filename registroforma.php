<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header bg-darkcyan text-white text-center">
                <h2>
                    Alta de Adminstradores
                </h2>
            </div>
            <div class="card-body">
                <!-- Formulario de registro de Empleados -->
                <form action="registro.php" method="post" autocomplete="true">
                    <div class="form-group">
                        <label for="NombreUsuario" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="NombreUsuario" name="NombreUsuario" required
                            pattern="^[a-z,0-9]{2,64}$" value="<?php echo $NombreUsuario; ?>" title="Nombre de Usuario"
                            placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <label for="NombreAdministrador" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="NombreAdministrador" Name="NombreAdministrador"
                            value="<?php echo $NombreAdministrador; ?>"
                            placeholder="ESCRIBA SU NOMBRE USANDO SOLO MAYUSCULAS"
                            title="ESCRIBA SU NOMBRE USANDO SOLO MAYUSCULAS" required pattern="^[A-ZÑÁÉÍÓÚ ]{2,32}$">
                    </div>
                    <div class="form-group">
                        <label for="ApellidosAdministrador" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="ApellidosAdministrador"
                            Name="ApellidosAdministrador" value="<?php echo $ApellidosAdministrador; ?>"
                            placeholder="ESCRIBA SUS APELLIDOS USANDO SOLO MAYUSCULAS"
                            title="ESCRIBA SUS APELLIDOS USANDO SOLO MAYUSCULAS " required
                            pattern="^[A-ZÑÁÉÍÓÚ ]{2,64}$">
                    </div>
                    <div class="form-group">
                        <label for="EmailAdministrador" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="EmailAdministrador" name="EmailAdministrador"
                            required value="<?php echo $EmailAdministrador; ?>" title="Correo Electronico:"
                            placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                        <label for="PasswordAdministrador" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="PasswordAdministrador"
                            name="PasswordAdministrador" required title="Contraseña Personal"
                            placeholder="Contraseña Personal">
                    </div>
                    <div class="form-group">
                        <a href="login.php" class="btn btn-dark-cyan">CANCELAR</a>
                    </div>
                    <div class="boton text-end">
                        <input type="submit" value="SOLICITAR REGISTRO" id="btnRegistrar" name="btnRegistrar"
                            class="btn btn-info mt-3 me-2">

                    </div>
                </form>
            </div>
            <div class="card-footer 1 text-white text-center">
                <h6>&copy; Mayo, 2023</h6>
            </div>
        </div>
    </div>
</div>