<?php
include "metodo_get.html";
        //se verifica informacion por medio del boton verificar
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "<h2>El Nombre Registrado es : ".$nombre."<br></h2>";
        echo "<h2>El Apellido Registrado es : ".$apellido."<br></h2>";
        echo "<h2>Su Documento de Identidad es : ".$cedula."<br></h2>";

    }else {
        echo "<h2>Registra Para Empezar.</h2>";
    }

    ?>
