<?php
            include("con_db.php");
            $id=$_GET['userID'];
           $sql="SELECT * FROM usuario where id='$id'";

           $result=$conex->query($sql);

           if($result->num_rows>0){
            //fetch_Assoc ---sentencia para que cuente de 1 a n elementos dentro de un registro
                while($row=$result->fetch_assoc()){
                    $name=$row['nombres'];
                    $apellido=$row['apellidos'];
                    $n_telefono=$row['num_telefono'];
                    $tID=$row['cboTipoid'];
                    $n_id=$row['num_identificacion'];
                    $email=$row['email'];
                    $contrasena=$row['password'];
                            
                }
           }else{
            echo "no data found";
           }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../front/img/favicon.png" rel="icon">
    <title>Editar tu Cuenta</title>
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
                <h1 class="form__titulo">Edita tu cuenta!</h1>
                <div class="contenedor-inputs">
<!-- si no quiero modificar un campo, en el input le coloco ...disabled="true"-->
                    <input type="text" name="nombres" value='<?php echo $name;?>' placeholder="NOMBRES"  class="input1-48"  required>
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
                include("update_user.php");
            ?>
            

        </section><br><br>

    </center>
   
</body>

</html>