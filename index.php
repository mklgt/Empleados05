<?php

include "helper/funciones.php";
include "clases/empleado.php";
use Empresaempleado\Empresa as Compañia;
use Empresaempleado\EmpleadoPlantilla as Plantilla;
use Empresaempleado\EmpleadoPorComision as EmpleadoComision;
use Empresaempleado\PruebaPolimorf as Polimorfismo;

$empresa = new Compañia();
$resultado = "";

$emp1 = new Plantilla("Asier", "Gonzalez", "319-20-7218", 800, 75);
$emp2 = new Plantilla("Mikel", "Goicoechea", "434-22-8641", 1000, 100);
$resultado .= "<h2>Empleado:</h2>";
$resultado .= "<h2>Empleado Asalariado:</h2>";
$resultado .= $emp1->mostrar();
$resultado .= "<br>" . $emp2->mostrar() . "<br>";

$empc1 = new EmpleadoComision("Iñigo", "Aguirre", "319-20-7218", 30, 350, 175);
$empc2 = new EmpleadoComision("Aimar", "Goicoechea", "434-22-8641", 35, 200, 325);
$resultado .= "<h2>Empleado por comisión:</h2>";
$resultado .= $empc1->mostrar();
$resultado .= "<br>" . $empc2->mostrar() . "<br>";

$resultado .= "<h2>Prueba Poliformismo:</h2>";
$resultado .= Polimorfismo::calcular($emp1) . "<br>";
$resultado .= Polimorfismo::calcular($empc2) . "<br>";

$resultado .= "<h2>Listado:</h2>";
$empresa->addEmpleado($emp1);
$empresa->addEmpleado($empc1);
$resultado .= $empresa->listarEmpleados();
$resultado .= "<h2>La suma total de ingresos es: " . $empresa->sumaIngresos() . "</h2>";

include "views/vista_resultado.php";
