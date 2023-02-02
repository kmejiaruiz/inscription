<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="http://localhost/inscripcion-componentes/">
    <title>Inscripcion de Componentes - A la Libertad por la Universidad!</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/default.css" />
    <link rel="stylesheet" href="./css/estilos-propios.css" />
    <link rel="stylesheet" href="./css/loader.css" />
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
          <img src="./img/logo.png" alt="" />
        </figure>
        <h1 class="d-flex justify-content-center align-items-center">
          <!-- <strong>U</strong>niversidad <br />
          <strong>N</strong>acional <br />
          <strong>A</strong>ut&oacute;noma de <br />
          <strong>N</strong>icaragua - Le&oacute;n <br /> -->
          Sistema de Gesti&oacute;n Ac&aacute;demica
        </h1>
        <h2>Inscripci&oacute;n de Componentes</h2>
      </div>
    </header>
    <div class="body">
      <div class="padre col-12">
        <div class="d-flex justify-content-center align-items-center">
          <?php
        include("./php/conectar.php");
        include("./php/verificar.php");
        ?>
        </div>
        <div
          class="hijo col-sm-6 col-9 col-md-5 col-lg-3"
          style="display: flex; align-items: center"
        >
          <div class="card w-100">
            <div class="card-body">
              <form id="formulario" method="post">
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label"
                    >Carnet</label
                  >
                  <div class="input-group w-100">
                    <span class="input-group-text">
                      <i class="bi bi-person-badge-fill"></i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      name="carnet"
                      id="exampleInputName"
                      placeholder="00-00000-0"
                      maxlength="10"
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputApellido" class="form-label"
                    >PIN</label
                  >
                  <div class="input-group w-100">
                    <span class="input-group-text">
                      <i class="bi bi-key-fill"></i>
                    </span>
                    <input
                      type="password"
                      class="form-control"
                      name="pin"
                      id="exampleInputApellido"
                      placeholder="prueba123#"
                    />
                  </div>
                </div>
                <hr />
              </form>
              <div
                class="button"
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  gap: 20px;
                "
              >
                <input
                  class="btn btn-success"
                  type="submit"
                  form="formulario"
                  name="botonEnviar"
                  value="Acceder"
                />

                <button
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  Ver Avisos
                </button>
                <!-- <button class="btn btn-light">By Kleyser</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="navbar fixed-bottom pie-pagina no-imprimir" id="footer">
        <div>
          &copy;
          <span class="anio"></span>
          UNAN-León <br />
          A la libertad por la Universidad
        </div>
      </footer>
    </div>
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
      style="background: rgba(0, 0, 0, 0.300);"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Avisos</h1>
            <div
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              style="border: none"
            ></div>
          </div>
          <div class="modal-body">
            <div class="alert alert-primary">
              <div class="text-center text">
                <strong>Aviso</strong>
              </div>

              Estimado estudiante: <br />

              - Para inscribir tus componentes curriculares del segundo semestre
              debes tener a mano tu número de carnet y PIN. <br />
              - El período de inscripción de componentes curriculares se
              dividirá en 2 períodos: <br />
              I.-Del 18 julio al 24 de julio del 2022, exclusivo para régimen
              trimestral: nocturnos, sabatinos, dominicales y medicina Plan 2020
              <br />
              II.- Del 25 de julio al 7 de agosto 2022, régimen semestral y
              trimestral: todas las carreras excepto UALN. <br />
              . - Una vez concluido el proceso de inscripción, imprima su hoja
              de inscripción o tome una captura de pantalla con los datos
              generados. <br />
              - Una vez inscrito un componente optativo virtual no podrá
              modificar esa inscripción. <br />
              - Si tiene problemas de inscripción de componentes dirigirse a su
              Secretaría Académica de Facultad. <br />
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>
    <script>
      const anioCorriente = new Date().getFullYear();
      const footer = document.querySelector("#footer");
      const anio = footer.querySelector(".anio");

      anio.textContent += `${anioCorriente}`;
    </script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.6.3.min.js"></script>
    <script src="./js/script-loader.js"></script>
    
  </body>
</html>
