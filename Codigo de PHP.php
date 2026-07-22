<html>
<head>

<?php

$paragraph = "Los estudiantes universitarios a menudo se sienten abrumados académicamente durante las semanas de los parciales y el final del semestre. Esto se debe a la carga adicional de trabajo académico, además de a la presión por obtener buenas notas para aprobar sus cursos. Para ellos, este periodo es especialmente difícil, y necesitan el apoyo de familiares y amigos para sentirse apoyados y así poder seguir adelante sin desanimarse." ";
$separar = explode(" ", $paragraph);

$acumulador = count($separar);
print "La cantidad de palabras que tiene el parrafo son:" .$acumulador . "<br>" ;

	for ($x = 0; $x < $acumulador; $x++) {
		print "La palabras individualmente que tiene el parrafo son:" .$separar[$x]. "<br>";
	}
?>