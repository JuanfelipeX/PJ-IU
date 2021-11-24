<?php
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include 'header.php';
include 'menu.php';

?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">
            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
    <div class="col-md-6 px-auto formulario">
        <form action="" method="POST" id="form">
            <div class="form">
                CONTACTENOS
                </div>
                <div class="card-body">
                        <div class="mb-3">
                            <label for="user" class="form-label">Nombre</label>
                            <input id="user" class="form-control" type="text" name="usuario" placeholder="Escriba nombre">
                        </div>
                
                <br>
                <div class="mb-3">
                            <label for="user" class="form-label">Email</label>
                            <input id="user" class="form-control" type="text" name="usuario" placeholder="Escriba Email">
                        </div>
                </div>
                <br>
                <div class="mb-3">
                            <label for="user" class="form-label">Telefono</label>
                            <input id="user" class="form-control" type="text" name="usuario" placeholder="Escriba Telefono">
                        </div>
                <br>
                <div class="mb-3">
                    <label for="user" class="form-textarea">¿DUDAS?</label>
                    <input id="user" class="form-control" type="text" name="usuario" placeholder="Escribenos tus comentarios">
                </div>

                <div align="center"><button type="button" class="btn btn-primary">Enviar</button></div>

                <p class="warnings" id="warnings"></p>
            </div>
        </form>
    </div>
    </div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->










<?php
include 'footer.php';
?>
