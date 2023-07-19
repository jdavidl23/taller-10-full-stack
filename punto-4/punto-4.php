<?php
    //DECLARACIÓN DE VARIABLES DE ENTRADA
    $firstName = 0;
    $lastName = 0;
    
    //PROCESO
    echo "Ingrese su primer nombre: ";
    fscanf(STDIN,"%s" , $firstName);
    echo "Ingrese su primer apellido: ";
    fscanf(STDIN,"%s" , $lastName);
    
    //Salida
    echo "Bienvenido: $firstName" . " " .$lastName;
?>