<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header text-center bg-darkcyan text-white">
                <h2>Nomina de empleados</h2>
            </div>
            <div class="card-body">
                <a href="../main/index.php" class="btn btn-dark-cyan">REGRESAR</a>
                <a href="insertar.php" class="btn btn-info text-white">INGRESAR EMPLEADO</a>
                <?php
                if (isset($tabla)) {
                    echo $tabla;
                }
                ?>
            </div>
            <div class="card-footer text-center bg-darkcyan text-white">
                <h6>&copy; Mayo, 2023</h6>
            </div>
        </div>
    </div>
</div>