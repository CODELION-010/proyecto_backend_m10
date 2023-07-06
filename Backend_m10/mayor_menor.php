<?php 
include "mayor_menor.html";
//inicializacion de variables y constantes
$edad = null;
const numero_edad = 18;
const cero = 0;
//verificacion de envio de informacion
if (!empty ($_POST ['edad'])) {
    $edad = $_POST ['edad'];

//condicionales determinando si es o no mayor de edad
    if ($edad >= numero_edad) {
      echo '<h2>su edad es de ' . $edad . ' años y usted es mayor de edad.</h2>'; 
    }elseif ($edad <= cero) {
        echo "<h2>el valor ingresado no es valido</h2>";
    }else {
        echo '<h2>su edad es de ' . $edad . ' años y no eres mayor de edad.</h2>';
    }
}else {
    echo "<h2>ingrese valores para empezar</h2>";
}
?>