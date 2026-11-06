<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FUNCIONES DE PHP</h1>
    <H2>Funciones de tipo de datos/variables</H2>
    <?php 
        $edad =18;
        $nombre='';
        if(isset($edad)){
            echo '$edad esta declarada y su valor es '.$edad;
        }
        else{
            echo '<br>$edad no está declarada';
        }
        if(isset($estatura)){
            echo '<br>$estarura esta declarada y su valor es '.$estatura;
        }
        else{
            echo '<br>$estatura no está declarada';

        }

        if(isset($nombre)){
            echo '<br>$nombre esta declarada y su valor es '.$nombre;
        }
        else{
            echo '<br>$nombre no está declarada';
        }

        if(empty($nombre)){
            echo '<br>$nombre no esta declarada o no tiene valor';
        }
        else{
            echo '<br>$nombre está declarada y su valor es '. $nombre;
        }

         if(empty($estatura)){
            echo '<br>$estatura no esta declarada o no tiene valor';
        }
        else{
            echo '<br>$estatura está declarada y su valor es '. $estatura;
        }

         if(empty($edad)){
            echo '<br>$edad no esta declarada o no tiene valor';
        }
        else{
            echo '<br>$edad está declarada y su valor es '. $edad;
        }

        $edad = null;

        if(empty($edad)){
            echo '<br>$edad no esta declarada o no tiene valor';
        }
        else{
            echo '<br>$edad está declarada y su valor es '. $edad;
        }

        unset ($edad);

        if(isset($edad)){
            echo '$edad esta declarada y su valor es '.$edad;
        }
        else{
            echo '<br>$edad no está declarada';
        }
    ?>

    <h2>FUNCIONES DE FECHA Y HORA</h2>
    <?php 
        $fechaConFormato = 'Hoy es '.date('l d \d\e F \d\e Y ').'y son las'.date('h:i:s');

        echo '<br>'.$fechaConFormato;

        //Obtener una fecha
        $hoy = time();
        echo '<br>Hoy es '.date('d/m/Y', $hoy);

        $fecha0 = 0;
        echo '<br>Fecha 0 es '.date('d/m/Y', $fecha0);
        
        $fecha1 = 24*60*60;
        echo '<br>Fecha 1 es '.date('d/m/Y', $fecha1);

        echo '<br>Segundos desde fecha 0 hasta ahora'.$hoy;

        $diaSemanaMiNacimiento = date(('l'),strtotime('2007-06-07'));
        echo '<br> Yo naci un '.$diaSemanaMiNacimiento
    ?>  

    <h2>FUNCIONES DE ARRAY</h2>
    <?php
        $dias = array('L','M','X','J','V');

        echo '<br> numero de elementos $dias'.count($dias);
        echo '<br> Numero de elemntos $dias'.sizeof($dias);

        if(!in_array('S',$dias)){
            echo '<br>S no esta en el array';
        }
        if(in_array('V',$dias)){
            echo '<br>S esta en el array';
        }
    ?>

    <h2>FUNCIONES DE CADENAS</h2>
    <?php 
        $texto = 'Este  textp           tiene   muchos   espacios  '.'-';

        echo '<br>'.trim($texto);

        $texto = implode('-', $dias);
        echo '<br>Dias de la semana como texto separado por -: '.$texto;

        $texto = 'nombre;apellido:edad';
        $array = explode(';',$texto);
        echo '<br>';
        var_dump($array);
    ?>

    <h2>Directiva INCLUDE y REQUIRE</h2>

    <?php 
        include 'clase04_f1.php'; //Se insertan los que haya en el fichero
    ?>
    <?php 
        include 'clase04_f2.php'; 
    ?>

</body>
</html>