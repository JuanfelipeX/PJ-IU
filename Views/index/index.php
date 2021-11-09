<?php

define('VIEWS_PATH', '../');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');

include 'header.php';
?>

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-10 col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?php echo IMG_PATH;?>imageindex.png" alt="Imagen de inicio" width="500px" height="340px">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="d-flex justify-content-center">
                                <p>Bienvenidos a Nuestro Sitio Web</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo VIEWS_PATH;?>index/indexUsuario.php" class="btn btn-primary">Entrar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>