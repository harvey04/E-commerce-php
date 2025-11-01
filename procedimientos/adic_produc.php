<?php
require("conexion.php");

$cod=$_POST["id_producto"];
$nom=$_POST["descripcion"];
$cantidad=$_POST["cantidad"];
$peso=$_POST["peso"];
$cat=$_POST["categoria"];
$marc=$_POST["marca"];
$precio=$_POST["precio"];

$conec=conectar();
$sql="insert into productos(id_producto, descripcion, cantidad, peso, categoria, marca, precio) values ('$cod', '$nom', '$cantidad', '$peso','$cat', '$marc', '$precio')";
$add1=$conec->query($sql);

if($add1){
    echo "<script>
        alert('Los productos han sido registrados con exito');
        window.location='../index.php';
    </script>";
}
else{
    echo "<script>
    alert('!Error¡, los datos no se han guardado');
    window.location='../productos.php';
</script>";
}


?>