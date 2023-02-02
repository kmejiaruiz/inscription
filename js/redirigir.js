// Variable que toma a dirigir cuando se clickea el logout o el cerrar sesion del header
var dirigir = document.querySelector(".dirigir");
// Fin de variable

// Variable que toma a dirigir cuando se clickea la inscripcion
var inscribir = document.querySelector("#inscribir");
// Fin de variable

dirigir.addEventListener("click", () => {
  window.location = "../../php/cerrar-sesion.php";
});

inscribir.addEventListener("click", () => {
    window.location = "../../icl/index.php";
});
