<?php
include("con_db.php");
    $name=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $n_telefono=$_POST['num_telefono'];
    $tID=$_POST['cboTipoid'];
    $n_id=$_POST['num_identificacion'];
    $email=$_POST['email'];
    $contrasena=$_POST['password'];

    $sql="UPDATE usuario SET
    
        nombre='$name',
        apellido='$apellido',
        n_telefono='$n_telefono',
        t_id='$tID',
        num_id='$n_id',
        email='$email',
        contrasena='$contrasena'
        where
        t_id='$n_id'";

        if($conex->query($sql)===TRUE){
            echo"<script>alert('user has been updated')</script>";
            header("refresh:0;url=http://127.0.0.1/DavidArteagaVic.github.io/pets/back/listUsers.php");
        }else{
            echo $conex->error;
        }
?>