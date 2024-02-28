<?php
class Baile
{
    public $nome;
    public $idadeMinima;
    function __construct(string $nome, int $idadeMinima = 8)
    {
        $this->nome = $nome;
        $this->idadeMinima = $idadeMinima;
    }
}