<?php
$pg = "proyecto"; 
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
  <?php include_once "header.php"; ?>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguinetes son algunos de los trabajos que he hecho</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-4 p-3 proyecto">
                <div class="proyecto">
                    <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <div>
                        <h2 class="p-3 d-block">ABM Clientes</h2>
                        <p class="p-3 pb-5 d-block"> Alta, baja y modificacion de registro de clientes</p>
                        <div class="row my-5">
                            <div class="col-6 ps-4">
                                <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="" target="_blank">Codigo Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-12 col-sm-4 p-3 proyecto">
            <div class="proyecto">
                <img src="images/abmventas.png" alt="ABM Clientes" class="img-fluid">
                <div>
                    <h2 class="p-3 d-block">Sistema de Gestion de Ventas</h2>
                    <p class="p-3 pb-5 d-block"> Sistema de Gestion de Clientes, Productos y Ventas</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-12 col-sm-4 p-3 proyecto">
            <div class="proyecto">
                <img src="images/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">
                <div>
                    <h2 class="p-3 d-block">Proyecto Integrador</h2>
                    <p class="p-3 pb-5 d-block"> Alta, baja y modificacion de registro de clientes</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
        <?php include_once "footer.php"; ?>
</body>

