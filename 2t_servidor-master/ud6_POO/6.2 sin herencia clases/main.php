<?php
require_once 'Persoa.php';
require_once 'Alumno.php';
require_once 'Profesor.php';
require_once 'Academia.php';
require_once 'Baile.php';
$academia = new Academia();

$profesor1 = new Profesor("Uxia", "Loureiro Agra", 69944999, "781234567Q");
$profesor2 = new Profesor("Mariana", "Preciso Momento", 687654321, "765432112M");
$profesor3 = new Profesor("Andres", "Velencoso Elfeo", 666123123, "12323132G");
$alumno1 = new Alumno("Anabel", "Pantojha Panatoja", 654321987);
$alumno2 = new Alumno("Pedro", "Carrascal Carrascal", 689456123);
$alumno3 = new Alumno("Pedrito", "Carrascol Garcia", 6894555555);
$alumno4 = new Alumno("Pedronte", "Carrascalito Perez", 666656123);

$academia->engadirProfesor($profesor1);
$academia->engadirProfesor($profesor2);
$academia->engadirProfesor($profesor3);
$academia->engadirAlumno($alumno1);
$academia->engadirAlumno($alumno2);
$academia->engadirAlumno($alumno3);
$academia->engadirAlumno($alumno4);

$alumno1->setNumClases(1);
$alumno2->setNumClases(2);
$alumno3->setNumClases(3);

$bSalsa = new Baile("Salsa");
$bBachata = new Baile("Bachata", 10);
$bAfro = new Baile("Afro");
$bRegional = new Baile("Regional", 5);
$bBreakDance = new Baile("Breakdance");
$bMerengue = new Baile("Merengue",12);
$bHipHop = new Baile("Hip Hop",5);

$profesor1->engadirBaile($bSalsa);
$profesor1->engadirBaile($bHipHop);
$profesor1->engadirBaile($bAfro);
$profesor1->engadirBaile($bSalsa); // Duplicado, no debería añadirlo de nuevo

$profesor2->engadirBaile($bBachata);
$profesor2->engadirBaile($bRegional);
$profesor2->engadirBaile($bBreakDance);

echo "Información academia inicial: ";
echo "<br>";
echo "<br>";
echo $academia->mostrarInformacionProfesores();
echo "<br>";
echo $academia->mostrarInformacionAlumnos();
echo "<br>";

echo "Información antes de eliminar el baile: ___________________________";
echo "<br>";
echo "<br>";
echo $profesor1-> verInformacion();
echo "<br>";
echo $profesor2-> verInformacion();
echo "<br>";
echo "<br>";

echo "Alumnos e informacion de Pago: ";
echo "<br>";
echo $alumno1->verInformacion() . ", debe abonar: " . $alumno1->aPagar(). " €. <br>";
echo $alumno2->verInformacion() . ", debe abonar: " . $alumno2->aPagar().  " €. <br>";
echo $alumno3->verInformacion() . ", debe abonar: " . $alumno3->aPagar().  " €. <br>";
echo $alumno4->verInformacion() . ", debe abonar " . $alumno4->aPagar().  " €. <br>";

//realizamos los cambios en la clase de hiphop

$profesor1->eliminarBaile($bHipHop); // le eliminamos Hiphop

//echo $profesor1->verBailes();

echo "<br>";echo "<br>";
echo "Información del profesor despues de eliminar el baile: ___________________________";
echo "<br>";
echo "<br>";
echo "<br>Informacion de la variable profesor";
echo "<br>";
echo $profesor1-> verInformacion();
echo "<br>";
echo "<br> Informacion de la Academia";
echo "<br>";
echo $academia->mostrarInformacionProfesores();
echo "<br>";
echo "<br>";
//echo $profesor1-> verInformacion().$profesor1->verBailes();
echo $profesor1-> verInformacion().$profesor2->calcularSoldo(56);
echo $profesor2-> verInformacion().$profesor2->calcularSoldo(26);
echo "<br>";



//Pruebas
/* echo "Otras pruebas: ";
echo $profesor3->verBailes();
echo "<br>";
$academia->actualizarProfesor($profesor3,$bHipHop) ;
echo "<br>";
echo $profesor3->verBailes();
echo "<br>"; */









