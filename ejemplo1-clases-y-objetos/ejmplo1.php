<?php

    class Tarea {}

     $Tarea1 = new Tarea();
     $Tarea2 = new Tarea();

    var_dump($Tarea1 === $Tarea2);
    //var_dump($Tarea1 === $Tarea1); probando este codigo dio true porque son el mismo objeto
    echo get_class($Tarea1) . PHP_EOL;
    echo get_class($Tarea2) . PHP_EOL;
