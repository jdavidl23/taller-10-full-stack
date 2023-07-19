<?php
    // FUNCIONES
    function add($firstNumber, $secondNumber) {
        return $firstNumber + $secondNumber;
    }
        
    function rest($firstNumber, $secondNumber) {
        return $firstNumber - $secondNumber;
    }
    
    function mult($firstNumber, $secondNumber) {
        return $firstNumber * $secondNumber;
    }
    
    function split($firstNumber, $secondNumber) {
        return $firstNumber / $secondNumber;
    }
    
    // VARIABLES
    $firstNumber = 0;
    $secondNumber = 0;
    $result = 0;
    
    // PROCESO
    echo "Ingrese el primer numero a operar: ";
    fscanf(STDIN, "%d", $firstNumber);
    echo "Ingrese el segundo numero a operar: ";
    fscanf(STDIN, "%d", $secondNumber);
    
    echo "Elija el tipo de operación: \n";
    echo "1 - Sumar\n";
    echo "2 - Restar\n";
    echo "3 - Multiplicar\n";
    echo "4 - dividir\n";
    fscanf(STDIN, "%d", $operationType);
    
    switch($operationType) {
        case 1:
            $result =add($firstNumber,$secondNumber);
            break;
        case 2:
            $result =rest($firstNumber,$secondNumber);
            break;
        case 3:
            $result =mult($firstNumber,$secondNumber);
            break;
        case 4:
            $result =split($firstNumber,$secondNumber);
            break;
        default:
            echo "No eligió una opción correcta \n";
    }
    
    echo "El resultado es: " . $result;
?>