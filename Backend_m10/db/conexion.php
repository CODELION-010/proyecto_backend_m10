<?php

    $host = 'localhost';#se agrega el signo "$"
    $usuario = 'root';
    $contraseña = '123465*'; #se asigna contraseña
    $basedatos = 'mi_proyecto';
                                  #se agrega "$contraseña"      
    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>