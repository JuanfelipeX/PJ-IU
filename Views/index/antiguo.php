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
        <img src="<?php echo IMG_PATH; ?>car6.gif" alt="Carro 6" width="1250" height="600">
        <div class="texto-huracan2">
            <h2 style="color: white;">FERRARI 512 BB</h2>
        </div>
        <div class="texto-huracan3">
            <h1 style="color: white;"> ¡SOLO 929<br> UNIDADES! </h1>
        </div>
    </div>

    <br>
    <br>

    <div class="card bg-secondary mb-3" style="max-width: 70rem;">
        <div class="card-header">CARACTERISTICAS</div>
        <div class="card-body">
            <h4 class="card-title">MOTOR &nbsp; CILINDRADA TOTAL &nbsp; POTENCIA MÁXIMA A 6800 REV/MIN &nbsp; VELOCIDAD MÁXIMA </h4>
            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp; V12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4943.04 cc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 265 kW &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 302 km/h </p>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo IMG_PATH; ?>car9.png" alt="Carro 9" width="700" height="400">
            </div>
            <div class="col-sm">
                <h1>PERSPECTIVA <br> GENERAL </h1 <h6> En su estreno en el Salón del Automóvil de París de 1976, el 512 BB estaba equipado con una versión de 5 litros del motor bóxer de 12 cilindros. El nuevo propulsor tuvo un gran éxito: daba la misma potencia pero a menos revoluciones, tenía más par y respondía de forma más suave que la versión anterior del 365 GT4 BB. La carrocería de Pininfarina se diferenciaba sólo en pequeños detalles de la del modelo precedente, lo que la hacía más elegante y contribuía también a mejorar la refrigeración del motor.</h6> <br> <br>
            </div>
        </div>
    </div>

    <br>

    <iframe width="1200" height="500" src="https://www.youtube.com/embed/lAqZkRTgotM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->










<?php
include 'footer.php';
?>