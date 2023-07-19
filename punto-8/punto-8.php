<?php
    // DECLARACIÓN DE VARIABLES DE ENTRADA
    const TICKET_PRICE = 25000;
    $membershipType = "";
    $personNumber = 0;
    
    // PROCESO
    echo "Ingrese su tipo de afilación: ";
    fscanf(STDIN, "%s", $membershipType);
    echo "Ingrese el número de personas: ";
    fscanf(STDIN, "%d", $personNumber);
    
    $totalPay = $personNumber * TICKET_PRICE;
    
    switch($membershipType) {
        case "A":
            $totalPay = $totalPay - ($totalPay *0.3);
            break;
        case "B":
            $totalPay = $totalPay - ($totalPay *0.25);
            break;
        case "C":
            $totalPay = $totalPay - ($totalPay *0.10);
            break;
        case "D":
            $totalPay = $totalPay - ($totalPay *0.05);
            break;
        default:
            echo "No tiene descuento \n";
    }
    
    echo "El total a pagar es: " . $totalPay;
?>