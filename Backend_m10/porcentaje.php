<?php

include 'porcentaje.html';

// Inicialisación de Variables.
$compra = 0;
$descuento = 0;


if (!empty($_POST['compra']) && !empty($_POST['descuento'])) {
    $compra    = ($_POST['compra']);
    $descuento = ($_POST['descuento']);
    

    //Se Multiplica el Total por el Descuento Y se Divide por Cien.
    
    $total = $compra * $descuento / 100;// determina el valor del porcentaje
    $total2 = $compra - $total;//Calcular el Valor a Pagar
    $total_formateado = number_format($total, 0, ',', '.');//Da Formato a los Numero Para Separarlos con Puntos.
    $compra_formateado = number_format ($compra, 0, ',', '.');
    $total2_formateado = number_format ($total2, 0, ',', '.');
    
    echo 
    "<h2>El Valor Ingresado es de: $" . $compra_formateado . "<br>" .
    "Su Descuento es del:  " . $descuento ."%" . 
    "<br>"." El Total a Descontar es de: $ " . $total_formateado . "<br>" .
    "El Valor a Pagar es de: $ " . $total2_formateado . "</h2>";

} else {
     echo "<h2>Ingrese los Valores Requeridos Para Empezar.</h2>";
  }

?>