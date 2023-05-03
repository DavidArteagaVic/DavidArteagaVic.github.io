<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/estilos_log.css">
    <link href="../front/icons/perro.png" rel="icon">

    
    <title>Iniciar Sesion</title>
</head>

<body>
    <button>
        <a href="../index.php">VOLVER</a>
    </button>

    


    <div class="login-box">
        <center><h1>Ingresa tus Datos</h1></center>
        <form action="" method="post">
            <input name="email-1" type="email" placeholder="Correo Electrónico"  class="input1-48" required>
            <input name="password-1" type="password" placeholder="Contraseña"  class="input1-48" required>
            <input type="submit" value="Ingresar" name="ingresar" class="btn-enviar"><br><br>
            <a href="rec_contraseña.php" class="a">¿olvidaste tu contraseña?</a><br><br>
            
            
        </form>
            <button class="btn-enviar2">
                <a href="createUser.php">REGISTRATE GRATIS!</a>
            </button><br><br>
            
            

            <?php  
                include("loguear.php");
            ?>
    </div>
    
    
</body>
</html>