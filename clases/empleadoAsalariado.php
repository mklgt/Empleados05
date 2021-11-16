class EmpleadoPlantilla extends Empleado
{
    private $sueldo;
    private $dietas;

    public function __construct($nombre, $apellido, $numeroSS, $sueldo, $dietas)
    {
        parent::__construct($nombre, $apellido, $numeroSS);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getDietas()
    {
        return $this->dietas;
    }

    public function setDietas($dietas)
    {
        $this->dietas = $dietas;

        return $this;
    }

    public function ingresos()
    {
        return "Los ingresos: ".($this->sueldo + $this->dietas);
    }

}