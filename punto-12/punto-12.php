<?php
    // DECLARACIÓN DE VARIABLES DE ENTRADA
    $number = 0;
    
    // PROCESO
    echo "Escriba el numero a multiplicar: ";
    fscanf(STDIN, "%d", $number);
    
    for($x = 0; $x <=30;) {
        $result = $number * $x;
        echo $number . " X " . $x . " * " . $result . "\n";
        $x++;
    }
?>