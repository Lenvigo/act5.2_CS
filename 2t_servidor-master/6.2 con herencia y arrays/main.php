<?php
require_once 'Persoa.php';
require_once 'Alumno.php';
require_once 'Profesor.php';
require_once 'Academia.php';
require_once 'Baile.php';

$profesores = [
    new Profesor("Uxia", "Loureiro Agra", 69944999, "781234567Q"),
    new Profesor("Mariana", "Preciso Momento", 687654321, "765432112M"),
    //new Profesor("Andres", "Velencoso Elfeo", 666123123, "12323132G"),

];
$alumnos = [
    new Alumno("Anabel", "Pantojha Panatoja", 654321987),
    new Alumno("Pedro", "Carrascal Carrascal", 689456123),
    new Alumno("Pedrito", "Carrascol Garcia", 6894555555),
];

$bailes = [
    new Baile("Salsa"),
    new Baile("Bachata", 10),
    new Baile("Afro"),
    new Baile("Regional", 5),
    new Baile("Breakdance", 5),
    new Baile("Breakdance", 12),
    new Baile("Hip Hop", 5)
];

$miAcademia = new Academia();

//$academia->engadirProfesor($profesores[]);

foreach ($profesores as $profesor) {
    $miAcademia->engadirProfesor($profesor);
}
foreach ($alumnos as $alumno) {
    $miAcademia->engadirAlumno($alumno);
}

$alumno1 = $alumnos[0];
$alumno1->setNumClases(1);
$alumno2 = $alumnos[1];
$alumno2->setNumClases(2);
$alumno3 = $alumnos[2];
$alumno3->setNumClases(3);

$profesor1 = $profesores[0];
$profesor1->engadirBaile($bailes[0]);
$profesor1->engadirBaile($bailes[1]);
$profesor1->engadirBaile($bailes[2]);
$profesor1->engadirBaile($bailes[1]);

$profesor2 = $profesores[1];
$profesor2->engadirBaile($bailes[4]);
$profesor2->engadirBaile($bailes[5]);
$profesor2->engadirBaile($bailes[6]);

echo "Informacion de  profesores y alumnos en la academia antes de eliminar Baile: ";
echo "<br>";
$miAcademia->mostrarInformacionProfesores();
echo "<br>";
$miAcademia->mostrarInformacionAlumnos();

echo "<br>";
echo "<br>";

echo "Informacion de alumnos y sus cuotas: ";
echo "<br>";
foreach ($alumnos as $alumno) {
    echo $alumno->verInformacion() . ". Su cuota asciende a:  " . $alumno->aPagar() . " €.<br>";
}

echo "<br>";
echo "<br>";

echo "Informacion de profesores en la academia despues de eliminar Baile: ";
echo "<br>";
$profesor1->eliminarBaile($bailes[2]);
$miAcademia->mostrarInformacionProfesores();
