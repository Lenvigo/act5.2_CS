<?php

require_once 'Persoa.php';
require_once 'Alumno.php';
require_once 'Profesor.php';
require_once 'Academia.php';
require_once 'Baile.php';

// Crear objetos y probar la funcionalidad
$academia = new Academia();

$profesor1 = new Profesor("Adriana", "Lima", 666666666, "00000089P");
$profesor1->engadirBaile("Salsa");
$profesor1->engadirBaile("Bachata");
$profesor1->engadirBaile("Hip Hop");
$profesor1->engadirBaile("Afro");
$profesor1->engadirBaile("Salsa"); // Duplicado, no debería añadirlo de nuevo

$profesor2 = new Profesor("Marta", "Landín", 6661113331, "36999988L");
$profesor2->engadirBaile("Bachata");
$profesor2->engadirBaile("Kizomba");

$academia->engadirProfesor($profesor1);
$academia->engadirProfesor($profesor2);

$alumno1 = new Alumno("Brais", "Guti", 666999888);
$alumno1->setNumClases(2);

$alumno2 = new Alumno("Pere", "Escudero", 666777888);
$alumno2->setNumClases(3);

$academia->engadirAlumno($alumno1);
$academia->engadirAlumno($alumno2);

echo "Información de la academia antes de eliminar el baile: ";
echo '<br>';
echo $academia->mostrarInformacionProfesores();
echo '<br>';
echo $academia->mostrarInformacionAlumnos();
echo '<br>';

// El profesor deja de dar clase de AFRO. Actualiza la información de la academia y vuelve a mostrar la información del profesor.
$academia->actualizarProfesor("Adriana", "Afro");

echo "Información de la academia después de eliminar el baile: ";
echo '<br>';
echo $academia->mostrarInformacionProfesores();
echo '<br>';
echo $academia->mostrarInformacionAlumnos();
