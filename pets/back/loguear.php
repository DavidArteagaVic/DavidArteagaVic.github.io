<?php
    include("con_db.php");
    
    if(isset($_POST['ingresar'])){
        if(strlen($_POST['email-1'])>=1 && strlen($_POST['password-1'])>=1){
            $email=trim($_POST['email-1']);
            $password=trim($_POST['password-1']);
           

            $consulta="SELECT*FROM usuario WHERE email='$email' AND password='$password'";
            
    
            $resultado=mysqli_query($conex,$consulta);

            $filas=mysqli_fetch_array($resultado);

            $filas1=mysqli_num_rows($resultado);

            //inf.util para verificar si el usuario se registró y logueo
            session_start();
                $_SESSION['usuario']=$consulta;

            if($filas1){
                header('Location:bienvenido.php');
                
            }else{
                ?>
                <h3>Error en la autenticacion, vuelve a ingresar tus datos </h3>
                <?php
                
            }
            mysqli_free_result($resultado);
            mysqli_close($conex);

        }
    }

    
    
    
?>