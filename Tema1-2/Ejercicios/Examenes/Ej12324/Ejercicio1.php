<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Fecha de entrada</label><br>
        <input type="date" name="fecha" id=""><br>
        <label for="">Cliente</label><br>
        <input type="text" name="cliente" id=""><br>
        <label for="">Tipo de prenda</label><br>
        <select name="prenda" id="">
            <option value="fiesta">Fiesta</option>
            <option value="cuero">Cuero</option>
            <option value="hogar">Hogar</option>
            <option value="textil" selected>Textil</option>
        </select><br>
        <label for="">Servicios</label><br>
        <input type="checkbox" name="servicio[]" value="limpieza">Limpieza
        <input type="checkbox" name="servicio[]" value="planchado">Planchado
        <input type="checkbox" name="servicio[]" value="desmanchado">Desmanchado <br>
        <label for="">Importe</label>
        <input type="number" name="importe" id="">

        <button type="submit" name="guardar">Guardar</button>
    </form>

    <?php

        if (isset($_POST['guardar'])) {
            (empty($_POST['fecha'])||empty($_POST['cliente'])||empty($_POST['prenda'])||empty($_POST['importe'])? $error[] ='Campos sin rellenar' : '');
            (empty($_POST['servicio'])? $error[] ='Debe se seleccionar un servicio' : '');


            if (isset($error)) {
                foreach ($error as $e) {
                    echo '<h3 style="color:red;">'.$e.'</h3>';
                }
            }
            else {
                echo '<h2>Datos Correctos</h2>';
                echo '<h3>Prensa: '.$_POST['prenda'].'</h3>';
                foreach ($_POST['servicio'] as $s) {
                    echo 
                }
            }
        }

    ?>

</body>
</html>