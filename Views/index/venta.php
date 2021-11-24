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
                Formulario de venta
                </div>
                <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo IMG_PATH; ?>formato.png" width="700" height="700">
            </div>
            
            <?php
include 'footer.php';
?>