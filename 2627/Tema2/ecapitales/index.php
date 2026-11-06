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
    <h1>JUEGO CAPITALES</h1>
    <h3>¿Cual es la capital de <?php echo $paises[$pais-1][1]; ?></h3>

    <form action="" method="">
        <input type="text" name="capital" placeholder="Introduce Capital">
        <button type="submit" name="validar">Validar</button>
        <button type="submit" name="pasar">Pasar</button>
    </form>
</body>

</html>