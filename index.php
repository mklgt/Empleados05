<?php
    include "helper/funciones.php";
    include "clases/empleado.php";
    $resultado="";
    $emp1 = new EmpleadoPlantilla("Asier", "Gonzalez","319-20-7218", 800, 75);
    $emp2 = new EmpleadoPlantilla("Mikel", "Goicoechea","434-22-8641", 1000, 100);
    $resultado.="<h2>Empleado:</h2>";
    $resultado.="<h2>Empleado Asalariado:</h2>";
    $resultado.=$emp1->mostrar();
    $resultado.="<br>".$emp2->mostrar()."<br>";

    $empc1 = new EmpleadoPorComision("Iñigo", "Aguirre","319-20-7218", 30, 350, 175);
    $empc2 = new EmpleadoPorComision("Aimar", "Goicoechea","434-22-8641", 35, 200, 325);
    $resultado.="<h2>Empleado por comisión:</h2>";
    $resultado.=$empc1->mostrar();
    $resultado.="<br>".$empc2->mostrar()."<br>";
    
    $resultado.="<h2>Prueba Poliformismo:</h2>";
    $resultado.= PruebaPolimorf::calcular($emp1)."<br>";
    $resultado.= PruebaPolimorf::calcular($empc2)."<br>";
    
    
    
    
    
    include "views/vista_resultado.php";
