<?php
class Profesor
{
    private Persoa $persoa;
    public string  $nif;
    private array $bailes;
    private const PRECIO_HORA = 16;
    //public int $numHoras = 0;

    function __construct(string $nome, string $apelidos, int $mobil, string $nif)
    {
        $this->persoa = new Persoa($nome, $apelidos, $mobil);
        $this->nif = $nif;
        $this->bailes = [];
    }

    public function calcularSoldo(int $numHoras)
    { 
        return "El sueldo de este profesor asciende a: " . self::PRECIO_HORA * $numHoras . " €.<br>";
    }

    public function engadirBaile(Baile $baile)
    {
        if (!$this->tenBaile($baile)) {
            $this->bailes[] = $baile;
        }
    }
    public function tenBaile(Baile $baile)
    {
        foreach ($this->bailes as $b) {
            if ($b === $baile) {
                return true;
            }
        }
        return false;
    }

    public function eliminarBaile(Baile $baile)
    {
        $this->bailes = array_filter($this->bailes, function ($b) use ($baile) {
            return $b !== $baile;
        });
    }

    public function verBailes()
    {
        $result = "";
        foreach ($this->bailes as $baile) {
            $result .= $baile->verInformacion();
        }
        return $result;
    }


    public function verInformacion()
    {
        return  "Profesor/a: ". $this->persoa->verInformacion() . " - Soldo: " . $this->calcularSoldo(20) . "Bailes: " . $this->verBailes();
    }
}
