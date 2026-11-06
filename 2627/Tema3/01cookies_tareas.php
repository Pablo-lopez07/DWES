<?php
    if (isset($_POST['add'])) {
        if (empty($_POST['fecha']) || empty($_POST['hora']) || empty($_POST['desc'])) {
            echo 'rellena los datos de la tarea';
        }else {
            if (isset($_COOKIE['tarea'])) {
                $tareas=unserialize($_COOKIE['tarea']);
                
            }else {
                $tareas=array();

            }
            $tareas[] = array('fecha'=>$_POST['fecha'], 'hora'=>$_POST['hora'], 'desc'=>$_POST['desc']);

            setcookie('tarea', serialize($tareas), time()+365*24*60*60);

            header('location:01cookies_tareas.php');
        }
    }
    elseif (isset($_POST['borrarT'])) {
        if (isset($_COOKIE['tarea'])) {
            $tareas = unserialize($_COOKIE['tarea']);

            unset($tareas[$_POST['borrarT']]);

            $tareas = array_values($tareas);

            setcookie('tarea', serialize($tareas), time()+365*24*60*60);
            header('location:01cookies_tareas.php');
             
        }

        
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
    
    <h1>TAREAS PENDIENTE</h1>
    <form action="" method="post">
        
        
        

        <table border="1000px solid red">
            <tr>
                <td><input type="date" name="fecha" id="" value="<?php echo date('Y-m-d') ?>"></td>
                <td><input type="time" name="hora" id="" value="<?php echo date('h:i') ?>"></td>
                <td><input type="text" name="desc" id="" placeholder="Descripcion"></td>
                <td><button type="submit" name="add">Añadir tarea</button></td>
                <?php
                    
                    if (isset($_COOKIE['tarea'])) {
                        $tareas = unserialize($_COOKIE['tarea']);
                       foreach ($tareas as $i => $t) {
                        echo '<tr>';
                        echo'<td>'.$t['fecha'].'</td>';
                        echo'<td>'.$t['hora'].'</td>';
                        echo'<td>'.$t['desc'].'</td>';
                        echo'<td><button type="submit" name="borrarT" value="'.$i.'">Borrar</button></td>';
                        echo '</tr>';
                    } 
                    }
                    
                ?>
            </tr>
        </table>
    </form>

</body>
</html>