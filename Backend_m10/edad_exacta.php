<?php
include "edad_exacta.html";
    //inicializacion de variables y constantes
     $edad = 0;
     const constante_18 = 18;
     define ("constante0","0");
    //verificacion de informacion por medio del boton verificar
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
      /*
      comparacion de la fecha ingresada con la fecha actual
      usando el operador "->" para generar edad actual del usuario
      */
        $date2 = new DateTime(date("y-m-d"));//fecha actual almacenada en $date2

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;
        
      //condicional para determinar si es mayor o menor de edad
        if ($edad_actual >= constante_18) {
            echo "<h2> Tu edad es de " . $edad_actual . " años y eres Mayor de Edad. </h2>";
        }
        else if ($edad_actual < constante_18 && $edad_actual > constante0) {
            echo "<h2> Tu edad es de " . $edad_actual . " años, y eres menor de edad. </h2>";
        }
        else {
            echo "<h2>  Valor no valido </h2>";
        }
        
        echo "<h2>Tu edad exacta es de: <br> ".$edad_actual." años, ".$edad_meses." meses y ".$edad_dias . " dias.</h2>";
         
    }else {
        echo "<h2>Selecciona o Registra  Para Empezar</h2>";
    }

    ?>
