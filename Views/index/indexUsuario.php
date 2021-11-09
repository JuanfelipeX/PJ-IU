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


    <!--Ejemplo Carrusel-->
    <div class="row">
        <div class="col">
            <div align="center"><img src="<?php echo IMG_PATH; ?>titlePr.png" class="d-block w-300" alt="titulo principal"></div>
            <!-- con data-bs-interval="10000" se está indicando que cada transición dura 10000 milisegundos-->
            <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-bs-ride="carousel" data-bs-interval="10000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 600px;">
                    <!--Se añadió este estilo en línea-->
                    <div class="carousel-item active">
                        <img src="<?php echo IMG_PATH; ?>car1.gif" class="d-block w-100" alt="Carro 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>HURACÁN</h5>
                            <p>BASADO EN UNA HISTORIA REAL PONERLINKDELCOCHEs</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo IMG_PATH; ?>car2.gif" class="d-block w-100" alt="Carro 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>812 SUPERFAST</h5>
                            <p>EL MAS RAPIDO DE FERRARI HASTA LA FECHA PONERLINKDELCOCHE</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo IMG_PATH; ?>car3.gif" class="d-block w-100" alt="Carro 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>MAZDA 3</h5>
                            <p>AVANZA CON SU GRANDEZA PONERLINKDELCOCHE</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br><br>

        </div> <!-- cierra col-->
    </div> <!-- cierra row-->



    <!-- Grid row -->

    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-5">Modelos</h1>
                <p class="lead">Busque y encuentre su vehiculo de estreno</p>
                <hr class="my-4">
                <p>VIVE LA EXPERIENCIA DE CONDUCCION CON:</p>


                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                            <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                                <img src="<?php echo IMG_PATH; ?>deportivos.png" class="d-block w-100" alt="titulo deportivos" width="100" height="80">
                                <div class="card-body">
                                    <img src="<?php echo IMG_PATH; ?>car4.png" class="d-block w-100" alt="Carro 4">
                                    <p class="card-text">Some quick example text to build on the card title</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">

                            <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                                <img src="<?php echo IMG_PATH; ?>casuales.png" class="d-block w-100" alt="titulo casuales" width="200" height="80">
                                <div class="card-body">
                                    <img src="<?php echo IMG_PATH; ?>car5.png" class="d-block w-100" alt="Carro 5">
                                    <p class="card-text">Some quick example text to build on the card title</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm">

                            <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                                <img src="<?php echo IMG_PATH; ?>antiguo.png" class="d-block w-100" alt="titulo antiguos" width="100" height="80">
                                <div class="card-body">
                                    <img src="<?php echo IMG_PATH; ?>car6.png" class="d-block w-100" alt="Carro 6">
                                    <p class="card-text">Some quick example text to build on the card title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="my-4">
    <!--Ejemplo Acordeon-->

    <div class="row">
        <div class="col">
            <h1>Ejemplo Acordeón</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->


</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->

<?php
include 'footer.php';
?>