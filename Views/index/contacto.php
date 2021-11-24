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
                <h1>CONTACTENOS</h1>
                <div class="grupo">
                    <input type="text" name="" id="name"><span class="barra"></span>
                    <label for="">Nombre</label>
                </div>
                <br>
                <div class="grupo">
                    <input type="email" name="" id="email"><span class="barra"></span>
                    <label for="">Email</label>
                </div>
                <br>
                <div class="grupo">
                    <input type="phone" name="" id="phones"><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <br>
                <div class="grupo">
                    <textarea name="mensaje" id="comments" placeholder="Escribenos tus comentarios">
            </textarea>
                </div>

                <button type="submit">Enviar</button>
                <p class="warnings" id="warnings"></p>
            </div>
        </form>
    </div>
    </div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->










<?php
include 'footer.php';
?>