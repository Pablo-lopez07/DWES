<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LIGA DE FUTBOL ies AUGUSTOBRIGA</h1>
    <form action="index.php?controlador=login&accion=loguear" method="post">
        <div>
            <input type="text" name="dni" id="" placeholder="DNI">
        </div>
        <div>
            <input type="password" name="ps" placeholder="Contraseña">
        </div>
        <div>
            <button type="submit" >Entrar</button>
        </div>
    </form>

    <?php
        require RAIZ.'/vistas/pie.php';
    ?>
</body>
</html>