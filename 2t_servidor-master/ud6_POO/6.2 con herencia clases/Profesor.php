<?php
class Profesor extends Persoa
{
    public string  $nif;
    private array $bailes;
    private const PRECIO_HORA = 16;

    function __construct(string $nome, string $apelidos, int $mobil, string $nif)
    {
        parent::__construct($nome, $apelidos, $mobil);
        $this->bailes = [];
        $this->nif = $nif;
    }
    public function calcularSoldo( int $numeroHoras){
        return self::PRECIO_HORA * $numeroHoras;

    }
    public function engadirBaile(string $nomeBaile, int $idadeMinima = 8)
    {
        if (!$this->tenBaile($nomeBaile)) {
            $this->bailes[] = ["nome" => $nomeBaile, "idadeMinima" => $idadeMinima];
        }
    }

    public function eliminarBaile(string $nomeBaile)
    {
        $this->bailes = array_filter($this->bailes, function ($baile) use ($nomeBaile) {
            return $baile["nome"] !== $nomeBaile;
        });
    }

    public function verBailes()
    {
        $result = "";
        foreach ($this->bailes as $baile) {
            $result .= "{$baile['nome']} (idade min: {$baile['idadeMinima']})\n";
        }
        return $result;
    }

    private function tenBaile(string $nomeBaile)
    {
        foreach ($this->bailes as $baile) {
            if ($baile["nome"] === $nomeBaile) {
                return true;
            }
        }
        return false;
    }

    public function verInformacion()
    {
        return parent::verInformacion() . " - Soldo: {$this->calcularSoldo(4)} euros".'\n'."Bailes: ".'\n'."{$this->verBailes()}";
    }

}