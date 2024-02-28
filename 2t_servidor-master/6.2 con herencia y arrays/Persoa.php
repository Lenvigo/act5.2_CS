<?php
class Persoa
{
    public string $nome;
    public string $apelidos;
    public int $mobil;

    function __construct(string $nome, string $apelidos, int $mobil)
    {
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->mobil = $mobil;
    }

    public function verInformacion()
    {
        return "{$this->nome} {$this->apelidos} ({$this->mobil})";
    }

    // Getters & Setters


    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of apelidos
     *
     * @return string
     */
    public function getApelidos(): string
    {
        return $this->apelidos;
    }

    /**
     * Set the value of apelidos
     *
     * @param string $apelidos
     *
     * @return self
     */
    public function setApelidos(string $apelidos): self
    {
        $this->apelidos = $apelidos;

        return $this;
    }

    /**
     * Get the value of mobil
     *
     * @return int
     */
    public function getMobil(): int
    {
        return $this->mobil;
    }

    /**
     * Set the value of mobil
     *
     * @param int $mobil
     *
     * @return self
     */
    public function setMobil(int $mobil): self
    {
        $this->mobil = $mobil;

        return $this;
    }
}
