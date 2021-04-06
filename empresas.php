<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empresas</title>
</head>
<body>
    <h1>Ingrese los datos de la empresa</h1>
    <form action="procedimientos/adcion_emp.php" name="empresas" method="post" id="emp" require>
        <input type="text" name="id_empresa" placeholder="Ingrese el nit de la empresa"require>
        <input type="text" name="nombre_emp" placeholder="Ingrese el nombre de la empresa" require>
        <input type="text" name="direccion" placeholer="Ingrese la direccion de la empresa"require>
        <input type="text" name="correo" placeholder="Ingrese el correo de la emrpesa"require>
        <input type="text" name="telefono" placeholder="Ingrese el telefono" require>
        <input type="submit" name="aceptar" value="Aceptar">
    </form>
    <a href="index.php">asdasdasd</a>
</body>
</html>