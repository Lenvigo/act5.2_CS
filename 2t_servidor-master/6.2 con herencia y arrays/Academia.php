<?php
class Academia
{
    private const NOME = "Academia de Baile";
    private $profesores;
    private $alumnos;


    function __construct()
    {
        $this->profesores = [];
        $this->alumnos = [];
    }
    
    // no hemos comprobado que el profesor exista ya
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
        echo "Profesores en la academia: " . "<br>";
        foreach ($this->profesores as $profesor) {
            echo $profesor->verInformacion() . "<br>";
        }
    }

    public function mostrarInformacionAlumnos()
    {
        echo "Alumnos en la academia: " . "<br>";
        foreach ($this->alumnos as $alumno) {
            echo $alumno->verInformacion() . "<br>";
        }
    }

    public function actualizarProfesor(Profesor $profesor, Baile $baile)
    {
        foreach ($this->profesores as $key => $profesorEnAcademia) {
            if ($profesorEnAcademia === $profesor) {
                $profesorEnAcademia->eliminarBaile($baile);
                $this->profesores[$key] = $profesorEnAcademia;
            }
        }
    }




    // Getters & Setters


    /**
     * Get the value of profesores
     */
    public function getProfesores()
    {
        return $this->profesores;
    }

    /**
     * Set the value of profesores
     */
    public function setProfesores($profesores): self
    {
        $this->profesores = $profesores;

        return $this;
    }

    /**
     * Get the value of alumnos
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    /**
     * Set the value of alumnos
     */
    public function setAlumnos($alumnos): self
    {
        $this->alumnos = $alumnos;

        return $this;
    }
}
