<?php
final class Alumno extends Persoa
{
    //private Persoa $persoa;
    private ?int $numClases;



    function __construct(string $nome, string $apelidos, int $mobil)
    {
        parent::__construct($nome, $apelidos, $mobil);
        $this->numClases = null;
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
        return " Alumno/a: " . parent::verInformacion() . " - Número de clases: {$this->numClases}";
    }

     // Getters & Setters

    public function getNumClases(): ?int
    {
        return $this->numClases;
    }

    public function setNumClases(?int $numClases): self
    {
        $this->numClases = $numClases;

        return $this;
    }
}
