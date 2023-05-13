<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vis.usuarios</title>
</head>
<body>
    <table border="1" align="center">
        <tr><td colspan="7" align="center">lista de todos los usuarios</td></tr>
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>ident</th>
            <th>email</th>
            <th>contraseña</th>
            <th>tipo id</th>
            <th>cell phone</th>
            
            <th>...</th>
        </tr>

        <?php
            include("con_db.php");
           $sql="SELECT * FROM usuario";

           $result=$conex->query($sql);

           if($result->num_rows>0){
            //fetch_Assoc ---sentencia para que cuente de 1 a n elementos dentro de un registro
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                            <td>".$row['nombre']."</td>
                            <td>".$row['apellido']."</td>
                            <td>".$row['num_ID']."</td>
                            
                            <td>".$row['email']."</td>
                            <td>".$row['password']."</td>
                            
                            <td>".$row['tipo_id']."</td>
                            <td>".$row['teléfono']."</td>
                            <td>
                                <a href='http://127.0.0.1/DavidArteagaVic.github.io/pets/back/delete_user.php?userID=".$row['id']."'>
                                    <img src='../front/icons/eliminar.png' width='30'></a> &nbsp;&nbsp;
                                <a href='http://127.0.0.1/DavidArteagaVic.github.io/pets/back/edit_user.php?userID=".$row['id']."'>
                                    <img src='../front/icons/editar.png' width='30'></a>;
                            </td>
                        </tr>";
                            
                }
           }else{
            echo "no data found";
           }
        ?>

        <!-- generar cbx para mostrar datos especificos -->

    </table>
</body>
</html>