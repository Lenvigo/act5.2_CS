<?php
 class Academia{
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
        $result = "Profesores en la academia:\n";
        foreach ($this->profesores as $profesor) {
            $result .= $profesor->verInformacion() . "\n";
        }
        return $result;
    }

    public function mostrarInformacionAlumnos()
    {
        $result = "Alumnos en la academia:\n";
        foreach ($this->alumnos as $alumno) {
            $result .= $alumno->verInformacion() . "\n";
        }
        return $result;
    }

    public function actualizarProfesor(string $nombreProfesor, string $baileEliminado)
    {
        foreach ($this->profesores as $profesor) {
            if ($profesor->nome === $nombreProfesor) {
                $profesor->eliminarBaile($baileEliminado);
            }
        }
    }
}