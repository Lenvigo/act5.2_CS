<?php
class Baile
{
    public string $nome;
    public int $idadeMinima;

    function __construct(string $nome, int $idadeMinima = 8)
    {
        $this->nome = $nome;
        $this->idadeMinima = $idadeMinima;
    }
    public function verInformacion()
    {
        return " {$this->nome} (idade min: {$this->idadeMinima})".".";
    }
}