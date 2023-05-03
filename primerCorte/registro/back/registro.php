<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/estilos.css">
    <title>Registrar Datos</title>
</head>
<body>
    <center><h1>REGISTRATE</h1></center>

    <div class="caja_registro">
        <input type="text" name="nombre" class="input-1" placeholder="Nombre">
        <input type="text" name="apellido" class="input-1" placeholder="Apellido">
        <input type="text" name="telefono" class="input-1" placeholder="Telefono">
        <select name="tipo_ident" id="" class="input-2">
            <option>Tipo Identificación</option>
            <option>Cédula</option>
            <option>Tarjeta de Identidad</option>
        </select>
        <input type="text" name="num_id" class="input-1" placeholder="Numero de Identificación">
        <input type="email" name="email" class="input-1" placeholder="E-mail">
        <input type="password" name="contrasena" class="button-1" placeholder="Contraseña">
        <input type="submit" value="registrar" >

    </div>
</body>
</html>