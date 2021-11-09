<div class="wrapper">
    <!-- Sidebar - Menu -->
    <nav id="sidebar" class="bg-primary">
        <div class="sidebar-header">
            <img src="<?php echo IMG_PATH; ?>logo.png" class="d-block w-100" alt="logo principal">

        </div>
        <ul class="list-unstyled components">

            <img src="<?php echo IMG_PATH; ?>logo2.png" class="d-block w-100" alt="logo secundario">

            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexUsuario.php"> <img src="<?php echo IMG_PATH; ?>menuPr.png" class="d-block w-100" alt="logo principal"> </a>
            </li>
            <li class="active dropend">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                    Usuarios
                </a>
                <ul class="dropdown-menu" id="homeSubmenu">
                    <li>
                        <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php">Lista usuarios</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>usuarios/VistaNuevoUsuario.php">Nuevo usuario</a>
                    </li>
            </li>
        </ul>
        </li>
        <li>
        <li class="active dropend">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                <img src="<?php echo IMG_PATH; ?>carros.png" alt="titulo carro" width="110" height="50">
            </a>
            <ul class="dropdown-menu" id="homeSubmenu">
                <li>
                    <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php"><img src="<?php echo IMG_PATH; ?>deportivos.png" alt="titulo carro" width="130" height="40"></a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php"><img src="<?php echo IMG_PATH; ?>casuales.png" alt="titulo carro 2" width="210" height="35"></a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php"><img src="<?php echo IMG_PATH; ?>antiguo.png" alt="titulo carro 3" width="120" height="40"></a>
                </li>
        </li>
        </ul>
        </li>

        <li>
            <a href="#">Contacto</a>
        </li>
        <li>

            <a href="<?php echo VIEWS_PATH; ?>index/"> <img src="<?php echo IMG_PATH; ?>salir.png" alt="salir" width="90" height="45"></a>
        </li>
        </ul>
    </nav>
    <!-- Hide/Show menu button-->
    <div id="content">
        <div class="row">
            <div class="col-3">
                <nav class="">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-chevron-left" id="arrow1"></i>
                    </button>
                </nav>
            </div>
        </div>
    </div>