<?php
    include "helper/funciones.php";
    include "clases/empleado.php";
    $resultado="";
    $emp1 = new Empleado("Asier", "Gonzalez","319-20-7218");
    $emp2 = new Empleado("Silvia", "LaMancho","434-22-8641");
    $resultado.=$emp1->mostrar()."<br> ".$emp2->mostrar();



    include "views/vista_resultado.php";
