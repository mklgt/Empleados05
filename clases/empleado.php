<?php
class Empleado
{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    public function __construct($nombre, $apellido, $numeroSS)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSS;
    }

    //Getters y Setters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNumeroSeguridadSocial()
    {
        return $this->numeroSeguridadSocial;
    }

    public function setNumeroSeguridadSocial($numeroSS)
    {
        $this->numeroSeguridadSocial = $numeroSS;

        return $this;
    }

    public function mostrar()
    {
        return "->Este empleado " . $this->nombre . " " . $this->apellido . " con el NSS: " . $this->numeroSeguridadSocial;
    }

    //abstract public function ingresos();
}

/*class EmpleadoPlantilla extends Empleado
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido, $numeroSS, $sueldo, $dietas){
        parent::__construct($);
    }

}*/
