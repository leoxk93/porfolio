<?php
$pg = "contacto"; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                    </div>
                </form>
            </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-3">Sponsor <a href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-3"><a href="mailto:leo_xk93@hotmail.com.ar>">leo_xk93@hotmail.com.ar</a></div>

        </div>
        <?php include_once "footer.php"; ?>
</body>

</html>