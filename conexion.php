<?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $database = "pruebaphp";
    $conexion = mysqli_connect($host, $user, $passwd,$database);
    mysqli_set_charset($conexion, "utf8");