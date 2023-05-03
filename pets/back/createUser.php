<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../front/img/favicon.png" rel="icon">
    <title>Crear tu Cuenta</title>
    <link rel="stylesheet" href="../front/estilos_cr.css">
    <link href="../front/icons/perro.png" rel="icon">
    
</head>
<body>
    
    <button>
        <a href="../index.php">VOLVER</a>
    </button>

  

    
    <center>
        
        
        <section>
            
            <form name="login form" action="" method="post" class="form-register">
                <h1 class="form__titulo">Crea tu cuenta en PETS!</h1>
                <div class="contenedor-inputs">

                    <input type="text" name="nombres" placeholder="NOMBRES"  class="input1-48"  required>
                    <select name="cboTipoid" placeholder="Tipo de Identificación" class="input-48" required>
                        <option value="">Tipo de Identificación</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
                        
                    </select>
                    <input type="text" name="apellidos" placeholder="APELLIDOS"  class="input1-48"  required>
                    <input type="text" name="num_identificacion" placeholder="Identificación"  class="input1-48"  required>
                    
                    
                    <input type="text" name="num_telefono" placeholder="Teléfono"  class="input1-48"  required>
                    <input type="email" name="email" placeholder="Correo Electrónico"  class="input1-48"  required>
                    <input type="password" name="password" placeholder="Contraseña"  class="input1-48"  required>
                    
                    <input type="submit" value="Registrar" name="register" class="btn-enviar">
                    
                </div><br>
                
                
            </form>
            
            <?php  
                include("registrar.php");
            ?>
            

        </section><br><br>

    </center>
   
</body>

</html>