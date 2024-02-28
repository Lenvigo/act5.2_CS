<?php
class Persoa
{
    public string $nome;
    public  string $apelidos;
    public int $mobil;
    function __construct(string $nome,string $apelidos,int $mobil)
    {
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->mobil = $mobil;
    }
    public function verInformacion()
    {
        return "{$this->nome} {$this->apelidos} ({$this->mobil})";
    }

}
