<?php
class Academia
{
    private const NOME = "Academia de Baile";
    private array $profesores;
    private array $alumnos;

    function __construct()
    {
        $this->profesores = [];
        $this->alumnos = [];
    }

    public function engadirProfesor(Profesor $profesor)
    {
        $this->profesores[] = $profesor;
    }

    public function engadirAlumno(Alumno $alumno)
    {
        $this->alumnos[] = $alumno;
    }

    public function mostrarInformacionProfesores()
    {
        $result = "Profesores en la academia: ". "<br>";
        foreach ($this->profesores as $profesor) {
            $result .= $profesor->verInformacion() . "<br>";
        }
        return $result;
    }

    public function mostrarInformacionAlumnos()
    {
        $result = "Alumnos en la academia: ". "<br>";
        foreach ($this->alumnos as $alumno) {
            $result .= $alumno->verInformacion() . "<br>";
        }
        return $result;
    }

    public function actualizarProfesor(Profesor $profesor, Baile $baile)
    {
        foreach ($this->profesores as $profesorEnAcademia) {
            if ($profesorEnAcademia === $profesor) {
                $profesorEnAcademia->eliminarBaile($baile);
            }
        }
    }
}