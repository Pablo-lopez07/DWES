<?php
    require_once 'controlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

        <div>
            <label for="">DNI</label>
            <input type="text" name="dni">
        </div>
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="fecha">
        </div>
        <div>
            <label for="">Sexo</label>
            <input type="radio" name="sexo" id="" value="Hombre" checked>Hombre
            <input type="radio" name="sexo" id="" value="Mujer">Mujer
        </div>
        <div>
            <label for="">Otras opciones</label>
            <input type="checkbox" name="opciones[]" id="" value="bus">Transporte
            <input type="checkbox" name="opciones[]" id="" value="Beca">Beca
        </div>
        <div>
            <button type="submit" name="enviar">Enviar</button>
            <button type="reset" name="limpiar">Limpiar</button>
        </div>

    </form>
    <?php 

        if(isset($mensaje)){
            echo '<h3 style="color: green">'.$mensaje.'</h3>';
        }

        if(isset($error)){
            echo '<h3 style="color: red">'.$error.'</h3>';
        }

    ?>

    <h2>Alumnos Matriculados</h2>
    <table border="1">
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Fecha nacimiento</td>
            <td>Sexo</td>
            <td>Transporte</td>
            <td>BECA</td>
        </tr>
      
        <?php 
            foreach($alumnos as $a){
                echo '<tr>';
                echo '<td>'.$a->getDni().'</td>';
                echo '<td>'.$a->getNombre().'</td>';
                echo '<td>'.date('d/m-Y',strtotime($a->getFn())).'</td>';
                echo '<td>'.$a->getSexo().'</td>';
                echo '<td>'.$a->getBus().'</td>'; 
                echo '<td>'.$a->getBeca().'</td>';
                echo '</tr>';
            }
        ?>
        
    </table>
</body>
</html>