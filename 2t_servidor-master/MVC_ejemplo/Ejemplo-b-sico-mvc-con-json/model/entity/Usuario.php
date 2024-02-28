<?php
class Usuario
{
    private int $id;
    private string $email;
    
    public function __construct(?int $id=null, string $email="") {
        $this->id = $id;
        $this->email = $email;
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function jsonSerialize(): mixed {
        //Especificamos qué propiedades no públicas queremos que pasen a formar parte del objeto JSON
      return array(
          'id' => $this->id,
          'email' => $this->email
          
      );
  }
}