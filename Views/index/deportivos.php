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
        <img src="<?php echo IMG_PATH; ?>car1.gif" alt="Carro huracan" width="1200" height="500">
        <div class="texto-huracan2">
            <h1 style="color: white;">HURACAN STO</h1>
        </div>
        <div class="texto-huracan3">
            <h3 style="color: white;"> ¡BASADO EN UNA <br> HISTORIA REAL! </h3>
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
                <img src="<?php echo IMG_PATH; ?>car7.png" alt="Carro huracan 2" width="800" height="300">
            </div>
            <div class="col-sm">
                <h1>PERSPECTIVA <br> GENERAL </h1 <h6> Un superdeportivo creado con el único objetivo de ofrecer toda la emoción y la tecnología de competición de un auténtico coche de carreras en un modelo legal de carretera. </h6> <br> <br>
            </div>
        </div>
    </div>

    <br>

    <iframe width="1200" height="500" src="https://www.youtube.com/embed/fFKHVSvnj-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <br><br>
    
    <div align="center"><button type="button" class="btn btn-primary" onclick="location.href='http://localhost/ConcesionarioWeb/PJ-IU/Views/index/venta'">Comprar</button>

    <br><br><br>

    <div class="texto-huracan1">
        <img src="<?php echo IMG_PATH; ?>car7.gif" alt="Carro porsche" width="1200" height="550">
        <div class="texto-huracan2">
            <h1 style="color: white;">PORSCHE 911 CARRERA</h1>
        </div>
        <div class="texto-huracan3">
            <h3 style="color: white;"> ¡DISEÑO <br> ATEMPORAL! </h3>
        </div>
    </div>

    <br>
    <br>

    <div class="card bg-secondary mb-3" style="max-width: 70rem;">
        <div class="card-header">CARACTERISTICAS</div>
        <div class="card-body">
            <h4 class="card-title">POTENCIA (KW) / POTENCIA (PS) &nbsp;&nbsp;&nbsp; VELOCIDAD MÁXIMA &nbsp;&nbsp;&nbsp; 0-100 km/h </h4>
            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 283 KW / 4385 PS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 293 km/h &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4,2 s</p>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo IMG_PATH; ?>car10.png" alt="Carro porsche 2" width="700" height="400">
            </div>
            <div class="col-sm">
                <h1>Concepto GTS <br> More of what you love. </h1> <h6> Cuando se trata de algo que verdaderamente apasiona, nunca es suficiente. Por ello, hemos incorporado en los modelos 911 GTS un poco más de aquello que tanto le gusta de Porsche. Para que la emoción se mantenga a flor de piel durante más tiempo. Un frenesí más intenso. Un mayor asombro. </h6> <br> <br>
            </div>
        </div>
    </div>

    <br>

    <iframe width="1200" height="500" src="https://www.youtube.com/embed/gMxEMw5lrmk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <br><br>

    <div align="center"><button type="button" class="btn btn-primary" onclick="location.href='http://localhost/ConcesionarioWeb/PJ-IU/Views/index/venta'">Comprar</button>



    <br><br>


</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->


<?php
include 'footer.php';
?>