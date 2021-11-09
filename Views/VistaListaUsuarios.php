<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lista Usuarios</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- <script src="" async defer></script> -->

       <table>
            <thead>
                <td>usuario</td>
                <td>nombre</td>
                <td>clave</td>
            </thead>
            <tbody>
                <?php
                foreach($listaUsuarios as $usuario){
                    echo "<tr>";
                    echo "<td>".$usuario['usuario']."</td>";
                    echo "<td>".$usuario['clave']."</td>";
                    echo "<td>".$usuario['nombre']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
</html>