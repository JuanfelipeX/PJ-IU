<div class="wrapper">
    <!-- Sidebar - Menu -->
    <nav id="sidebar" class="bg-primary">
        <div class="sidebar-header">
            <img src="<?php echo IMG_PATH; ?>logo.png" class="d-block w-100" alt="logo principal">

        </div>
        <ul class="list-unstyled components">

            <img src="<?php echo IMG_PATH; ?>logo2.png" class="d-block w-100" alt="logo secundario">

            <li>
                <div class="titulo_menu">
                    <a href="<?php echo VIEWS_PATH; ?>index/indexUsuario.php">
                        <p>MENU PRINCIPAL </p>
                </div>

            </li>
            <li class="active dropend">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                    <div class="titulo_menu">
                        <p>USUARIOS </p>
                    </div>
                </a>
                <ul class="dropdown-menu" id="homeSubmenu">
                    <li>
                        <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php">
                            <div class="titulo_menu">
                                <p>LISTA USUARIOS </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>index/VistaNuevoUsuario.php">
                            <div class="titulo_menu">
                                <p>NUEVO USUARIO </p>
                            </div>
                        </a>
                    </li>
            </li>
        </ul>
        </li>
        <li>
        <li class="active dropend">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                <div class="titulo_menu">
                    <p>CARROS </p>
                </div>

            </a>
            <ul class="dropdown-menu" id="homeSubmenu">
                <li>
                    <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>index/deportivos.php">
                        <div class="titulo_menu">
                            <p>DEPORTIVOS </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>index/casual.php">
                        <div class="titulo_menu">
                            <p>CASUALES </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>index/antiguo.php">
                        <div class="titulo_menu">
                            <p>ANTIGUOS </p>
                        </div>
                    </a>
                </li>
        </li>
        </ul>
        </li>

        <li>
            <a href="<?php echo VIEWS_PATH; ?>usuarios/">
                <div class="titulo_menu">
                    <p>CONTACTO </p>
                </div>
            </a>
        </li>
        <li>

            <a href="<?php echo VIEWS_PATH; ?>index/">
                <div class="titulo_menu">
                    <p>SALIR </p>
                </div>
            </a>
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