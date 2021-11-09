<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar - Menu -->
        <nav id="sidebar" class="bg-primary">
            <div class="sidebar-header">
                <img src="logo.png" alt="">
               <div align="center"><img src="logo2.png" alt="" width="100" height="50"></div>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#"><img src="menuPr.png" alt=""></a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-car-side"></i><img src="carros.png" alt=""></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../Controller/UsuariosController.php"> <img src="deportivos.png" alt=""></a>
                        </li>
                        <li>
                            <a href="VistaNuevoUsuario.php"><img src="casuales2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="VistaNuevoUsuario.php"><img src="antiguo.png" alt=""></a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#CRUD" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-sign-in-alt"></i><img src="unete.png" alt=""></a>
                    <ul class="collapse list-unstyled" id="CRUD">
                        <li>
                            <a href="../Controller/UsuariosController.php"><img src="iniciar.png" alt=""></a>
                        </li>
                        <li>
                            <a href="VistaNuevoUsuario.php"><img src="registrarse.png" alt=""></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </nav>
        <!--Content-->

        <div id="content" class="container-fluid">
            <div class="row"><!--nuevo-->
                <div class="col-3"><!--nuevo-->
                    <nav class="">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">

                            <i class="fas fa-chevron-left" id="arrow1"></i>
                        </button>
                    </nav>
                </div>
            </div>