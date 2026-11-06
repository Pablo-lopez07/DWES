<?php
    session_start();
    if (isset($_POST['crearV'])) {
        if (empty($_POST['nombrec']) || empty($_POST['valorv'])) {
            echo 'Rellena datos';
        }
        else{
            $_SESSION[$_POST['nombrec']]=$_POST['valorv'];

            header('location:02sesiones.php');
        }
    }
    elseif (isset($_POST['borrarS'])) {
        session_destroy();
        
        header('location:02sesiones.php');
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
    <form action="" method="post">
        <input type="text" name="nombrec" placeholder="Introduce el identificador de la variable de sesion">
        <input type="text" name="valorv" id="" placeholder="Introduce el valor de la variable">
        <button type="submit" name="crearV">Crear Variable de Sesion</button>
        <button type="submit" name="borrarS">Borrar Sesion</button>
    </form>
    <?php 
        foreach ($_SESSION as $clave => $s) {
            echo '<h2>'.$clave.'-'.$s.'</h2>';
        }
    ?>
</body>
</html>