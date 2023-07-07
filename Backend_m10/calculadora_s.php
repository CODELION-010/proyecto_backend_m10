<?php

include 'calculadora_s.html';

$valor1 = 0;
$valor2 = 0;
$resultado = 0;
#verificacion de selector y calcular
if (isset($_POST['calcular']) && isset ($_POST['selector'])) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $selector = $_POST['selector'];

     #↓conversion de cadena de caracteres a numeros enteros
    if (!is_numeric($valor1) || !is_numeric($valor2)) {
        echo "<h2>Los valores ingresados no son válidos.</h2>";
        exit;
    }

    switch ($selector) {
        case 'suma':
            $resultado = $valor1 + $valor2;
            break;
        case 'resta':
            $resultado = $valor1 - $valor2;
            break;
        case 'multiplicacion':
            $resultado = $valor1 * $valor2;
            break;
        case 'division':
            if ($valor2 != 0) { #se agrega condicional con restricion de division entre 0
                $resultado = $valor1 / $valor2;
            } else {
                echo "<h2>No se puede dividir entre 0.</h2>";
                exit;
            }
            break;
        default:
            echo "<h2>Operador no válido.</h2>";
            exit;
    }

    echo "<h2>El resultado de la operación $selector es: " . $resultado .  "<br>Ingresa Nuevos Valores Para Calcular. </h2>";
} else {
    echo '<h2>Ingresa valores para empezar</h2>';
}
?>
