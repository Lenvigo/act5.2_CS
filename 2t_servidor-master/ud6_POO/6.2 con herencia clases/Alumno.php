<?php
class Alumno extends Persoa{
    private ?int $numClases;

    public function __construct(string $nome,string $apelidos,int $mobil){
        parent::__construct($nome,$apelidos,$mobil);
        $this->numClases = null;
    }
        
    
    public function setNumClases($numClases){
        $this->numClases = $numClases;

    }

    public function ePagar()
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
        return parent::verInformacion() . " - Número de clases: {$this->numClases}";
    }
}
