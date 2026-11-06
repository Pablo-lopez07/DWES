<?php

    if (isset($_POST['crearC'])) {
        if(empty($_POST['nombrec']) || empty($_POST['valor'])){
            echo 'Rellena los datos de las cookies';
        }
        else {
            setcookie($_POST['nombrec'], $_POST['valor'],time()+24*60*60);

            header('location:01cookies.php');
        }
    }
    elseif (isset($_POST['borrarC'])) {
        foreach ($_COOKIE as $c => $valor) {
            setcookie($c,'', time()-1);

            header('location:01cookies.php');
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

    <form action="" method="post">

        <input type="text" name="nombrec" id="" placeholder="Introduce el identificador de la cookie">

        <input type="text" name="valor" id="" placeholder="Introduce el valor de la cookie">

        <button type="submit" name="crearC">Crear Cookie</button>
        <button type="submit" name="borrarC">Borrar Cookie</button>

    </form>

    <!-- Monstrar las cookies existentes -->
    <?php 
        
        foreach ($_COOKIE as $c => $valor) {
            echo '<p>'.$c.' : '.$valor.'</p>';
        }

    ?>
</body>
</html>