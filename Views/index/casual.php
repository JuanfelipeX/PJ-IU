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
        <img src="<?php echo IMG_PATH; ?>car5.gif" alt="Carro 5" width="1250" height="600">
        <div class="texto-huracan2">
            <h2 style="color: white;">MAZDA 3 PRIME MT</h2>
        </div>
        <div class="texto-huracan3">
            <h1 style="color: white;"> ¡INSPIRADO EN LA <br> GRANDEZA HUMANA! </h1>
        </div>
    </div>

    <br>
    <br>

    <div class="card bg-secondary mb-3" style="max-width: 70rem;">
        <div class="card-header">CARACTERISTICAS</div>
        <div class="card-body">
            <h4 class="card-title">MOTOR SKYACTIV-G &nbsp;&nbsp;&nbsp; VELOCIDADES &nbsp;&nbsp;&nbsp; PANTALLA TFT DE </h4>
            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,0L &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8,8"</p>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo IMG_PATH; ?>car8.png" alt="Carro 8" width="700" height="500">
            </div>
            <div class="col-sm">
                <h1>IN­GEN­I­ERÍA EN <br> EQUI­LIB­RIO </h1 <h6> Al conducir, como al caminar, es importante tener sensación de equilibrio, para inspirar confianza con cada giro del volante. El nuevo Mazda3 está diseñado bajo la ingeniería centrada en las personas y la plataforma Skyactiv-Vehicle Architecture, de modo que los neumáticos, los asientos y el chasis se complementen perfectamente para amoldarse a ti de la forma más natural posible. </h6> <br> <br>
            </div>
        </div>
    </div>

    <br>

    <iframe width="1200" height="500" src="https://www.youtube.com/embed/sP46ZpVMO54" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->










<?php
include 'footer.php';
?>