<?php

namespace clases\people;

use DateTimeImmutable;

/**
 * Description of Alumno
 *
 * @author maria
 */


final class Alumno extends Persoa implements \JsonSerializable
{

    const CUOTA_UNA_CLASE = 20;
    const CUOTA_DOS_CLASES = 32;
    const CUOTA_TRES_O_MAS_CLASES = 40;
   


    private  int $numClases;

    public function __construct(
        string $nome,
        string $apelidos,
        string $mobil,
        DateTimeImmutable $fechaNacimiento,
        $numClases = 0
    ) {
        parent::__construct($nome, $apelidos, $mobil, $fechaNacimiento);
        $this->numClases = $numClases;
        
    }
    /*private function esMayorEdad(): bool
    {
        $fechaActual = new DateTimeImmutable("now");
        $intervalo = $this->$fechaNacimiento->diff($fechaActual);
        if ($intervalo > 18)
            return true;
    }*/


    //Otra opción sería no añadir un constructor en esta clase
    //y cuando se llame a new Alumno($nome, $apelidos, $mobil) se llamaría
    //implícitamente al constructor de Persona
    public function jsonSerialize()
    {

        $nome_apelidos = join(" ", [$this->nome, $this->apelidos, $this->numClases],);
        return ["nome_apelidos" => $nome_apelidos, "mobil" => $this->mobil, "Numero de clases" => $this->numClases];
    }
    public function setNumClases($numClases): void
    {
        $this->numClases = $numClases;
    }

    public function aPagar(): string
    {
        $importe = 0;

        if (($this->numClases != null) && ($this->numClases > 0)) {

            switch ($this->numClases) {
                case 1:
                    $importe = self::CUOTA_UNA_CLASE;
                    break;
                case 2:
                    $importe = self::CUOTA_DOS_CLASES;
                    break;
                default:
                    //asumimos números positivos
                    $importe = self::CUOTA_TRES_O_MAS_CLASES;
                    break;
            }
        } else {
            $importe = "Debe indicar previamente o número de clases";
        }
        return $importe;
    }

   
    function verInformacion()
    {
        $cadea = implode(
            " ",
            [
                $this->nome,  $this->apelidos,
                "(" . $this->mobil . ")<br/>"
            ]
        );
     $cadea.=$this->esMayordeEdad() ? "(". $this->mobil. ")<bt/>>": "<br/>";
        echo $cadea;
    }


   /*  
     Get the value of fechaNacimiento
      @return DateTimeImmutable
   
    public function getFechaNacimiento(): DateTimeImmutable
    {
        return $this->fechaNacimiento;
    }
    */

    /**
     * Set the value of fechaNacimiento
     *
     * @param DateTimeImmutable $fechaNacimiento
     *
     * @return self
     */
    /*public function setFechaNacimiento(DateTimeImmutable $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    } */
}
