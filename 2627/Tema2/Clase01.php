<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Delimitadeor de php-->
    <?php
        //Comentario: // /* */
        //variables: empiezan por $ y no se indica tipo
        //El tipo cambia segun el valor
        $nombre ='Pablo';
        $altura =1.60;
        $alumno = true;
        echo '<p>Mis datos: ',$nombre,$alumno,$altura,'</p>';
        //Ver tipo de una variable
        echo '<p>$nombre: '.gettype($nombre).'</p>';
        echo '<p>$altura: '.gettype($altura).'</p>';
        echo '<p>$alumno: '.gettype($alumno).'</p>'; 

        //Escapar caracteres
        echo '<p>\'$nombre\': '.gettype($nombre).'</p>';

        //conversiones de tipo
        $number = 4 + "2";
        echo '<p>$number: '.$number.'</p>';

        //IF/ELSE/ELSEIF
        $nota = rand(0,10);

        echo '<p>Nota: '.$nota;

        if($nota<5){
            echo 'suspenso</p>';
        } 
        elseif($nota<6){
            echo 'suficiente</p>';
        }
        elseif($nota<7){
            echo 'bien</p>';
        }
        elseif($nota<9){
            echo 'notable</p>';
        }
        elseif($nota<10){
            echo 'Sobresaliente</p>';
        }
        else{
            echo 'MH</p>';
        }
    ?>
</body>
</html>