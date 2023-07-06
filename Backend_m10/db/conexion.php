<?php

    host = 'localhost';
    $usuario = 'root';
    $contraseña = 'xxx';
    $basedatos = 'mi_proyecto';

    $conexion = new mysqli($host,$usuario,,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>