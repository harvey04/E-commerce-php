<?php
include("../procedimientos/conexion.php");
$cor=$_POST["correo"];
$clave=$_POST["clave"];

$conex=conectar();
$sql="insert into login(correo, clave) values ('$cor', '$clave')";
$add=$conex->query($sql);
if($add){
    echo "<script>
        alert('Ha sido registrado con exito');    
        window.location='login.php';
    </script>";

}



?>