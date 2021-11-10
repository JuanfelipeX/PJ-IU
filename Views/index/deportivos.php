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


    <div class="texto-huracan1">
        <img src="<?php echo IMG_PATH; ?>car1.gif" alt="Carro 1" width="1250" height="550">
        <div class="texto-huracan2">
            <h2 style="color: white;">HURACAN STO</h2>
        </div>
        <div class="texto-huracan3">
            <h1 style="color: white;"> ¡BASADO EN UNA <br> HISTORIA REAL! </h1>
        </div>
    </div>

    <br>
    <br>

    <div class="card bg-secondary mb-3" style="max-width: 70rem;">
        <div class="card-header">CARACTERISTICAS</div>
        <div class="card-body">
            <h4 class="card-title">POTENCIA (CV) / POTENCIA (KW) &nbsp;&nbsp;&nbsp; VELOCIDAD MÁXIMA &nbsp;&nbsp;&nbsp; 0-100 km/h </h4>
            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 640 CV / 470 kW &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 310 km/h &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3,0 s</p>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo IMG_PATH; ?>car7.png" alt="Carro 7" width="800" height="300">
            </div>
            <div class="col-sm">
                <h1>PERSPECTIVA <br> GENERAL </h1 
                <h6> Un superdeportivo creado con el único objetivo de ofrecer toda la emoción y la tecnología de competición de un auténtico coche de carreras en un modelo legal de carretera. </h6> <br> <br>
            </div>
        </div>
    </div>

    <br>
    
    <iframe width="1200" height="500" src="https://www.youtube.com/embed/fFKHVSvnj-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->




<?php
include 'footer.php';
?>