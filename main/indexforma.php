<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="img/ciasa2.png" width="60" height="60">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="navbar-brand  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Inicio
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="dropdown-item"
                                        href="/Directorio ITVER/administrador/index.php">Empleados</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Gestion Documentos</a></li>
                                <li><a class="dropdown-item" href="#">Vacaciones</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="logout.php" tabindex="-1"
                                        aria-disabled="true">SALIR</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-info text-white" type="submit">
                            <?php
                            echo $_SESSION['NombreUsuario'];
                            ?>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    </div>
</div>