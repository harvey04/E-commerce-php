<?php
require("conexion.php");

$id=$_POST["id_empresa"];
$dec=$_POST["nombre_emp"];
$direc=$_POST["direccion"];
$cor=$_POST["correo"];
$tel=$_POST["telefono"];


if($id==""){
    echo "<script>
        alert('Debe diligenciar todos los campos');
        window.location='../empresas.php';
    </script>";
}
$conec=conectar();
$sql="insert into empresas(id_empresa, nombre_emp, direccion, correo, telefono) values('$id', '$dec', '$direc', '$cor', '$tel')";
$add=$conec->query($sql);

echo "<script>
    alert('Los datos han sido registrados con exito');
    window.location='../index.php';
    </script>";
}
?>