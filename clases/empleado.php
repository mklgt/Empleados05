<?php
namespace Empresaempleado;
abstract class Empleado {

    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    public function __construct($nombre, $apellido, $numeroSS) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSS;
    }

    //Getters y Setters
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getNumeroSeguridadSocial() {
        return $this->numeroSeguridadSocial;
    }

    public function setNumeroSeguridadSocial($numeroSS) {
        $this->numeroSeguridadSocial = $numeroSS;
    }

    //Funciones
    public function mostrar() {
        return "->Este empleado " . $this->nombre . " " . $this->apellido . " con el NSS: " . $this->numeroSeguridadSocial;
    }

    abstract public function ingresos();
}

class EmpleadoPlantilla extends Empleado {

    private $sueldo;
    private $dietas;

    public function __construct($nombre, $apellido, $numeroSS, $sueldo, $dietas) {
        parent::__construct($nombre, $apellido, $numeroSS);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
    }

    //Getters y Setters
    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getDietas() {
        return $this->dietas;
    }

    public function setDietas($dietas) {
        $this->dietas = $dietas;
    }

    //Funciones
    public function mostrar() {
        return parent::mostrar() . "<br>Los ingresos: " . $this->ingresos();
    }

    public function ingresos() {
        return ($this->sueldo + $this->dietas);
    }

}

class EmpleadoPorComision extends Empleado {

    private $horas;
    private $tarifa;
    private $base;

    public function __construct($nombre, $apellido, $numeroSS, $horas, $tarifa, $base) {
        parent::__construct($nombre, $apellido, $numeroSS);
        $this->horas = $horas;
        $this->tarifa = $tarifa;
        $this->base = $base;
    }

    //Getters y Setters
    public function getHoras() {
        return $this->horas;
    }

    public function setHoras($horas) {
        $this->horas = $horas;
    }

    public function getTarifa() {
        return $this->tarifa;
    }

    public function setTarifa($tarifa) {
        $this->tarifa = $tarifa;
    }

    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    //Funciones
    public function mostrar() {
        return parent::mostrar() . "<br>Los ingresos: " . $this->ingresos();
    }

    public function ingresos() {
        return ($this->base + $this->tarifa * $this->horas);
    }

}

class PruebaPolimorf {

    static function calcular($emp) {
        return "Los ingresos de " . $emp->getNombre() . " son " . $emp->ingresos();
    }

}

class Empresa {

    private $empresa = array();

    public function addEmpleado($empleado) {
        $this->empresa[] = $empleado;
    }

    public function listarEmpleados() {
        $listado = "";
        foreach ($this->empresa as $empleado) {
            $listado .= "Está empleado " . $empleado->getNombre() . " " . $empleado->getApellido() . " con el NSS: " . $empleado->getNumeroSeguridadSocial() . "<br>";
        }
        return $listado;
    }

    public function sumaIngresos() {
        $suma = 0;
        foreach ($this->empresa as $empleado) {
            $suma += $empleado->ingresos();
        }
        return $suma;
    }

}
