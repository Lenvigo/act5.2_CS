<?php
final class Profesor extends Persoa
{
    public string $nif;
    private array $bailes;
    // si no lo meteemosen el constructor
    // private $bailes= [];
    private const PRECIO_HORA = 16;

    function __construct(string $nome, string $apelidos, int $mobil, string $nif)
    {
        parent::__construct($nome, $apelidos, $mobil);
        $this->nif = $nif;
        //no es necesario declarar el array vacio de bailes
        $this->bailes = [];
    }

    // METODO EXTRA EXTRA
    public function calcularNumeroClases()
    {
        $numClases = count($this->bailes);
        return $numClases * 10;
    }
    public function calcularSoldo()
    {
        $numClases = $this->calcularNumeroClases();
        return "El sueldo de este profesor asciende a: " . self::PRECIO_HORA * $numClases . " €.<br>";
    }

    /* METODO  EJERCICIO
    public function calcularSoldo(int $numHoras)
    {
        return "El sueldo de este profesor asciende a: " . self::PRECIO_HORA * $numHoras . " €.<br>";
    }*/

    public function engadirBaile(Baile $baile)
    {
        if (!$this->tenBaile($baile)) {
            $this->bailes[] = $baile;
        }
    }
// añadir la utilidad que el mismo baile con diferente edad no sea considerado el mismo baile y podamos añadirlo
    public function tenBaile(Baile $baile)
    {
        foreach ($this->bailes as $b) {
            if ($b->getNome() === $baile->getNome()) {
                return true;
            }
        }
        return false;
    }

    public function eliminarBaile(Baile $baile)
    {
        $this->bailes = array_filter($this->bailes, function ($b) use ($baile) {
            return $b->getNome() !== $baile->getNome();
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
        return  "Profesor/a: " . parent::verInformacion() . " - Soldo: " . $this->calcularSoldo() . "Bailes: " . $this->verBailes();
    }

    // Resto de la clase
}
