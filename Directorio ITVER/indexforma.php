<div class="row justify-content-center" class="imagen-fondo">
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header bg-var text-center text-white">
                <h2><img src="img/logo.png" width="220" height="60"></h2>
            </div>
            <div class="card-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="NoEmpleado" class="form-label">Nombre De Usuario</label>
                        <input type="text" class="form-control" id="NoUsuario" name="NoEmpleado" required
                            pattern="^[0-9]{2,8}$" title="Captura tu numero de Empleado"
                            placeholder="Numero de Empleado">
                    </div>
                    <div class="form-group">
                        <label for="PasswordEmpleado" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="PasswordUsuario" name="PasswordEmpleado"
                            required title="Contraseña" placeholder="Contraseña">
                    </div>
                    <div class="boton text-center">
                        <input type="submit" value="Iniciar Sesión" id="btnLogin" name="btnLogin"
                            class="btn btn-info mt-3 me-2">
                    </div>

                    <div>
                        <a href="registro.php" class="btn btn-success">Registrarse</a>
                    </div>

                </form>
                <?php
                if (isset($ErrorMensaje)) {
                    echo "<div class='alert alert-danger'>$ErrorMensaje</div>";
                }
                ?>
            </div>
            <div class="card-footer bg-darkcyan text-center text-white">
                <h6>&copy; Mayo, 2023</h6>
            </div>
        </div>
    </div>
</div>