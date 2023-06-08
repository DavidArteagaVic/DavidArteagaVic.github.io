<?php
            include("con_db.php");
            $id=$_GET['userID'];
           $sql="SELECT * FROM usuario where id='$id'";

           $result=$conex->query($sql);

           if($result->num_rows>0){
            //fetch_Assoc ---sentencia para que cuente de 1 a n elementos dentro de un registro
                while($row=$result->fetch_assoc()){
                    $nombres=$row['nombre'];
                    $apellidos=$row['apellido'];
                    $n_telefono=$row['teléfono'];
                    $tID=$row['tipo_id'];
                    $n_id=$row['num_ID'];
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
            
            <form name="login form" action="http://127.0.0.1/DavidArteagaVic.github.io/pets/back/update_user.php" method="post" class="form-register">
                <h1 class="form__titulo">Edita tu cuenta!</h1>
                <div class="contenedor-inputs">
<!-- si no quiero modificar un campo, en el input le coloco ...disabled="true"-->
                    <input type="text" name="nombres" value='<?php echo $nombres;?>'  class="input1-48"  required>
                    <select name="cboTipoid" value='<?php echo $tID;?>' class="input-48" required>
                        <option value="">Tipo de Identificación</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="TARJETA DE IDENTIDAD">TARJETA DE IDENTIDAD</option>
                        
                    </select>
                    <input type="text" name="apellidos"  value='<?php echo $apellidos;?>' class="input1-48"  required>
                    <input type="text" name="num_identificacion"  value='<?php echo $n_id;?>'  class="input1-48" required >
                    
                    
                    <input type="text" name="num_telefono" value='<?php echo $n_telefono;?>'  class="input1-48"  required>
                    <input type="email" name="email" value='<?php echo $email;?>'  class="input1-48"  required>
                    <input type="password" name="password" value='<?php echo $contrasena;?>'  class="input1-48"  required>
                    
                    <input type="submit" value="Actualizar" name="register" class="btn-enviar">
                    
                </div><br>
                
                
            </form>
            
            
            

        </section><br><br>

    </center>
   
</body>

</html>