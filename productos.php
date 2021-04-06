<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar productos</title>
</head>
<body>
    <h1>Ingrese la informacion de los productos</h1><br>
    <form action="procedimientos/adic_produc.php" method="post" name="inicio" id="hola">
    <p>Descripcion</p>
    <input type="text" name="descripcion" placeholder="Ingrese el nombre del producto" id="l1">
    <p>Id del producto</p>
    <input type="text" name="id_producto" placeholder="Ingrese la id del producto" id="l1">
    <p>Cantidad de productos</p>
    <input type="text" name="cantidad" placeholder="Ingrese la cantidad de priductos" id="l1">
    <p>Peso del producto</p>
    <input type="text" name="peso" placeholder="Ingrese el peso del prodcuto" id="l1">
    <p>Categoria del producto</p>
    <input type="text" name="categoria" placeholder="Ingrese la categoria del producto" id="l1">
    <p>Empresa fabricante</p>
    <input type="text" name="marca" placeholder="Ingrese la empresa fabricante" id="l1">
    <p>Valor del producto</p>
    <input type="text" name="precio" placeholder="Ingrese el valor del producto" id="l1">
    <br><input type="submit" name="aceptar" placeholder="Aceptar" id="l1">
    </form>

</body>
</html>