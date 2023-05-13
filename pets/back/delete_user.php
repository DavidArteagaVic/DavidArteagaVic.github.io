<?php
    include('con_db.php');
    $id=$_GET['userID'];
    $sql="DELETE FROM usuario WHERE id='$id'";
    if($conex->query($sql)===TRUE){
        if($conex->affected_rows>0){
            echo"<script>alert('user has been deleated')</script>";
            header('refresh:0; url=http://127.0.0.1/DavidArteagaVic.github.io/pets/back/listUsers.php');
        }else{
            echo"<script>alert('user has not been found')</script>";
            header('refresh:0; url=http://127.0.0.1/DavidArteagaVic.github.io/pets/back/listUsers.php');
        }
    }else{
        echo"error: ".$conex->error;
    }
?>