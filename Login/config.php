<?php

//conexion a la base de datos
$enlace=mysqli_connect('localhost', 'root', '', 'form') or die(mysql_error($mysqli));

insertar($enlace);

function insertar($enlace){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];

    $pass= md5($contraseña); //Encriptacion de la contraseña con MD5

    $insertarDatos="INSERT INTO datos VALUES('$nombre', 
                                             '$apellido',
                                             '$email',
                                             '$pass')";

    mysqli_query($enlace, $insertarDatos);
    mysqli_close($enlace);
}

?> 
