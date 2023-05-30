<?php
    //Datos para la conexión con la base de datos.
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd_nombre = "biblioteca";

    //Hacemos la conexión con la BD.
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd_nombre);

    //Con esto verificamos que la conexión se haya realizado bien.
    if($conexion -> connect_error){
        die("Error en la conexión con la base de datos " .$conexion->connect_error);
    }

/*
Cada vez que mandemos a llamar este archivo desde otro archivo
debemos abrir la etiqueta en caso de requerirlo de nuevo.
*/

?>