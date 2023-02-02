<?php
include ('conectar.php');

#consulta todos los componentes en general
$componentes = "select * from componentes";

#consulta solo los componentes que son verdaderos en cuanto a si abrira en cursos de verano que sean electivas
$componentes_electiva = "select * from componentes where verano = 1 and tipo = 'Electiva'";

#consulta solo los componentes que son verdaderos en cuanto a si abrira en cursos de verano que sean obligatorias
$componntes_obligatoria = "select * from componentes where verano = 1 and tipo = 'Obligatoria'";

#consultamos los componentes ya antes inscritos "OJO, SE HAN INSERTADO LOS DATOS, ESTOS DATOS NO SON DINAMICOS, SINO ESTATICOS POR EL MOMENTO"
$listar_inscripciones = "select * from `registro-componentes`";

?>