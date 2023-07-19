<?php
    // DECLARACIÓN DE VARIABLES DE ENTRADA
    $firstName = "";
    $age = 0;
    
    // PROCESO
    echo "Ingrese su primer nombre: ";
    fscanf(STDIN, "%s", $firstName);
    echo "Ingrese su edad: ";
    fscanf(STDIN, "%d", $age);
    
    // SALIDA
    if($age >=18){
        echo "Su nombre es: " . $firstName . "\n";
        echo "Usted es mayor de edad \n";
    } else {
        echo "Su nombre es: " . $firstName . "\n";
        echo "Usted es menor de edad \n";
    }
?>