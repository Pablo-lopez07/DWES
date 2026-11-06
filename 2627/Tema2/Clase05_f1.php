<?php
    if($_SERVER['REQUEST_METHOD']!='POST'){
        header('location:Clase05.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3px">
        <tr>
            <td>Fecha y Hora</td>
            <td><?php
                echo (empty($_POST['fecha']) || empty($_POST['hora']) ?'No se ha rallenado fecha o hora':date('d/m/Y',strtotime($_POST['fecha'])).'-'.date('h:i:s',strtotime($_POST['hora'])))
            ?></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php 
                echo (empty($_POST['nombre'])?'No se ha rellenado':htmlspecialchars($_POST['nombre'],ENT_HTML5,'UTF-8'))
            ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <?php
                    echo (empty($_POST['pass'])?'No se ha rellenado':htmlspecialchars($_POST['pass'],ENT_HTML5,'UTF-8'))
                ?>
            </td>
        </tr>
        <tr>
            <td>Curso</td>
            <td>
                <?php 
                    echo (empty($_POST['curso'])?'No se ha rellenado':$_POST['curso'])
                ?>
            </td>
        </tr>
        <tr>
            <td>Asignaturas</td>
            <td>
                <?php 
                    if(isset($_POST['asig'])){
                        echo implode('-',$_POST['asig']);
                    }else{
                        echo 'No se ha marcado ninguna';
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>
                <?php 
                    echo (isset($_POST['tipo'])?$_POST['tipo']:'No se ha marcado')
                ?>
            </td>
        </tr>
        <tr>
            <td>Otro</td>
            <td>
                <?php 
                    if(isset($_POST['otros'])){
                        foreach($_POST['otros'] as $o){
                            echo $o. ' ';
                        }
                    }else{
                        echo 'No marcado';
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <?php 
                    if(!empty($_FILES['foto']['name'])){
                        $nuevoNombre = $_FILES['foto']['name'].date('dmYhis');
                        move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$nuevoNombre);

                        echo '<img width=10% src="img/'.$nuevoNombre.'">';
                    }else{
                        echo 'No se ha rellenado';
                    }
                    
                ?>            
            </td>
        </tr>
        <tr>
            <td>Comentario</td>
            <td>
                <?php 
                    echo (empty($_POST['comentario'])?'No se ha rellenado':htmlspecialchars($_POST['comentario'],ENT_HTML5,'UTF-8'));
                ?>
            </td>
        </tr>
    </table>
    <h2>alertas</h2>
    <?php 
        //comprabar que un profesor no puede tener beca mec y transporte
        if(isset($_POST['tipo'])&& $_POST['tipo']=='Profesor'){
            if( isset($_POST['otros']) && (in_array('Transporte',$_POST['otros']) || in_array('Beca MEC',$_POST['otros']))){
                echo '<h3 style="color:red;">Un porfesor no puede tener beca MEC, ni transporte</h3>';
            }
        }
        //Comprobar que un alumno debe tener marcado al menos dos asignaturas
        if(isset($_POST['tipo'])&& $_POST['tipo']=='Alumno'){
            if(isset($_POST['asig']) && sizeof($_POST['asig'])<2){
                echo '<h3 style="color:red;">El alumno debe matricularse en almenos dos asignaturas</h3>';
            }
        }
    ?>
</body>
</html>