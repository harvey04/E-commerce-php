<?php

function conectar(){
$server="localhost";
$user="root";
$password="";
$nombre="comto";

$conexion=mysqli_connect($server, $user, $password, $nombre) or die ("No se pudo conectar a la base");

return $conexion;
}

?>