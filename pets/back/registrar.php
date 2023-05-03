<?php
    include("con_db.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['nombres'])>=1 && strlen($_POST['apellidos'])>=1 && strlen($_POST['num_telefono'])>=1 
        && strlen($_POST['cboTipoid'])>=1 && strlen($_POST['num_identificacion'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['password'])>=1) {
        
            $name=trim($_POST['nombres']);
            $apellido=trim($_POST['apellidos']);
            $n_telefono=trim($_POST['num_telefono']);
            $tID=trim($_POST['cboTipoid']);
            $n_id=trim($_POST['num_identificacion']);
            $email=trim($_POST['email']);
            $contrasena=trim($_POST['password']);
            

            

            $consulta="INSERT INTO usuario( nombre, apellido, email, password, num_ID, tipo_id, teléfono)
             VALUES ('$name','$apellido','$email','$contrasena','$n_id','$tID','$n_telefono')";
            

            
            $verificar_correo=mysqli_query($conex, "SELECT*FROM usuario WHERE email='$email' ");
            if(mysqli_num_rows($verificar_correo)>0){
                ?>
                    <h3>El correo ya está en uso, intenta con otro </h3>
                <?php
                exit();
            }

            
            

            $resultado=mysqli_query($conex,$consulta); 

            if($resultado){
                ?>
                    <h3>TE REGISTRASTE CORRECTAMENTE</h3>
                <?php
            }else{
                ?>
                    <h3 >UPS! ALGO SALIÓ MAL</h3>
                <?php
            }

            

        }else{
            ?>
                <h3 >completar campos</h3>
            <?php
        }
    }
    
?>