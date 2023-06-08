<?php
include("con_db.php");
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $n_telefono=$_POST['num_telefono'];
    $tID=$_POST['cboTipoid'];
    $n_id=$_POST['num_identificacion'];
    $email=$_POST['email'];
    $contrasena=$_POST['password'];

    $sql="UPDATE usuario SET
    
        nombre='$nombres',
        apellido='$apellidos',
        teléfono='$n_telefono',
        tipo_id='$tID',
        num_ID='$n_id',
        email='$email',
        password='$contrasena'
        where
        num_ID='$n_id'
        ";

        if($conex->query($sql)===TRUE){
            echo"<script>alert('user has been updated')</script>";
            header("refresh:0; url=http://127.0.0.1/DavidArteagaVic.github.io/pets/back/listUsers.php");
        }else{
            echo $conex->error;
        }
?>