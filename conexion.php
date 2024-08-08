<?php
        $host='localhost';
        $user='root';
        $pass="";

        $db="iniciosesion";

        $conexion = mysqli_connect($host, $user, $pass, $db);

        if(!$con){
            echo "conexion fallida";
        }
?>