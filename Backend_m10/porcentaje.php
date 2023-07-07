<?php

include 'porcentaje.html';

// Inicialisación de Variables.
$compra = 0;
$descuento = 0;



if (isset($_POST['Calcular'])) {
    $compra    = ($_POST['compra']);
    $descuento = ($_POST['descuento']);
    
      #conversion de caracteres a numeros enteros
    if (!is_numeric($compra) || !is_numeric($descuento)) {
      echo "<h2>Los valores ingresados no son válidos.</h2>";
      exit;
  }

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

}else {
  echo "<h2> Ingrese Valores Para Empezar </h2>";
}
?>