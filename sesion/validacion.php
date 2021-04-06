<?php
$usuario=$_POST["correo"];
$clave=$_POST["clave"];
session_start();
$_SESSION['correo']=$usuario;

include("../procedimientos/conexion.php");
$con=conectar();
$sql="select * from login where correo='$usuario' and clave='$clave'";
$res=$con->query($sql);
$filas=mysqli_num_rows($res);

if($filas>0){
    echo "<script>
        window.location='../productos.php';
    </script>";
}
else{
    echo "<script>
        alert('Los datos ingresados son incorrectos');
        window.location='login.php';
    </script>";
}

?>