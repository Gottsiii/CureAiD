<?php
    
    $host= 'localhost';
    $user= 'root';
    $pass= '';
    $bd='login'; 

    $conexion = mysqli_connect($host, $user, $pass, $bd);

    if (!$conexion)
    {
        echo 'conexion fallida';
    }
?>