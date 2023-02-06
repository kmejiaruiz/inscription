<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header('location: ../');
}

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A la Libertad por la Universidad! - Inscribir Componentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="canonical" href="http://localhost/inscripcion-componentes/icl/inicio">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/estilos-propios.css">
    <link rel="stylesheet" href="../css/inicio.css">
</head>

<body>
    <div class="wrapper" style="color: #fff">
        <div class="loader flex" id="loader1">
            <div class="loader flex" id="loader2">
                <div class="loader flex" id="loader3"></div>
            </div>
        </div>
    </div>

    <header class="no-imprimir">
        <div>
            <figure class="">
                <img src="../img/logo.png" alt="" />
            </figure>
            <h1 class="d-flex justify-content-center align-items-center">
                <!-- <strong>U</strong>niversidad <br />
          <strong>N</strong>acional <br />
          <strong>A</strong>ut&oacute;noma de <br />
          <strong>N</strong>icaragua - Le&oacute;n <br /> -->
                Sistema de Gesti&oacute;n Ac&aacute;demica
            </h1>
            <h2>Inscripci&oacute;n de Componentes</h2>
            <div class="div d-flex justify-content-end align-items-center">
                <nav class="controlador">
                    <ul class="lista">
                        <li class="text-truncate lista-hijo" title="<?php echo $_SESSION['nombre']; ?>">
                            <i class="bi bi-person-vcard text-success"></i>
                            <?php
                            echo $_SESSION['usuario'];
                            ?>
                        </li> |

                        <li class="d-inline-block text-truncate dirigir">
                            <a href="../icl/inicio/" class="dirigir">
                                <i class="bi bi-arrow-bar-left text-danger"></i>
                                Regresar
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="principal">
        <div class="container-fluid mt-3 mb-3">
            <div class="d-flex gap-0 gap-sm-2 text-center justify-content-center flex-column flex-sm-row">
                <span class=" nombre-mensaje">
                    <?php echo $_SESSION['nombre']; ?>
                </span>
                <span class="anio-mensaje" id="span">/ </span>
            </div>
            <div class="d-flex flex-column text-center flex-sm-row justify-content-center">
                <span class="modalidad-mensaje" id="span">
                    <?php echo $_SESSION['turno']; ?>
                </span>
            </div>
            <hr>
        </div>

        <div class="container-fluid mb-2">
            <div class="fase">
                <div class="contenedor-fases flex-column flex-sm-row">
                    <div class="contenedor-f1 d-flex gap-2">
                        <span class="indicador">Fase 1</span> /
                        <span class="indicador-texto">Grupos Practicos
                            <i class="bi bi-info-circle-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="contenedor-f2 d-flex gap-2">
                        <span class="indicador">Fase 2</span> /
                        <span class="indicador-texto">Grupos Teoricos
                            <i class="bi bi-info-circle-fill text-warning"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="contenedor-tabla">
                <div class="row">
                    <div class="col-12"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const anioCorriente = new Date().getFullYear();
        const span = document.querySelector("#span");
        span.textContent += `${anioCorriente}`;
    </script>
    <!-- <script src="../js/redirigir.js"></script> -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.3.min.js"></script>
    <script src="../js/script-loader.js"></script>
</body>

</html>