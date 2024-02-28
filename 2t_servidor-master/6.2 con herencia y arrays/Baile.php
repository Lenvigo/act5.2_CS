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
     * Get the value of idadeMinima
     *
     * @return int
     */
    public function getIdadeMinima(): int
    {
        return $this->idadeMinima;
    }

    /**
     * Set the value of idadeMinima
     *
     * @param int $idadeMinima
     *
     * @return self
     */
    public function setIdadeMinima(int $idadeMinima): self
    {
        $this->idadeMinima = $idadeMinima;

        return $this;
    }
}