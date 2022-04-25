<header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link py-1 px-sm-4 <?php echo $pg == "inicio"? "active":"" ?>" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-sm-4 <?php echo $pg == "sobre-mi"? "active":"" ?>" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-sm-4 <?php echo $pg == "proyecto"? "active":"" ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-sm-4 <?php echo $pg == "contacto"? "active":"" ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="Curriculum vitae.docx" class="btn btn-outline-success" type="submit">Descargar mi CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>