<?php
class Alumno
{
    private Persoa $persoa;
    private ?int $numClases;

    function __construct(string $nome, string $apelidos, int $mobil)
    {
        $this->persoa = new Persoa($nome, $apelidos, $mobil);
        $this->numClases = null;
    }

    public function setNumClases(int $numClases)
    {
        $this->numClases = $numClases;
    }

    public function aPagar()
    {
        if ($this->numClases === null) {
            return 'Debe indicar previamente el número de clases';
        }

        if ($this->numClases === 1) {
            return 20;
        } elseif ($this->numClases === 2) {
            return 32;
        } else {
            return 40;
        }
    }

    public function verInformacion()
    {
        return " Alumno/a: ". $this->persoa->verInformacion() . " - Número de clases: {$this->numClases}";
    }
}