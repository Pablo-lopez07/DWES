<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Ambitos de variables
        //Siempre son locales al modulo en el que se define
        $color = 'rojo';

        //Definimos una funcion
        function pintarColor(){
            $color = "verde";
            echo '<h3> Color Local </h3>';
            echo "Color: ".$color;

        }

        //llamar a la funcion
        pintarColor(); //Muestra la variable local a la funcion

        //definimos otra funcion que trabaja con la varianle de forma global
        function pintarColor2(){
            global $color;
            echo '<h3> Color global </h3>';
            echo "Color: ".$color;
        }

        pintarColor2();

        //VARIABLES PREDEFINIDAS
        //mostrar version de php
        echo '<h3> Software del servidor '. $_SERVER['SERVER_SOFTWARE'].'</h3>';
        //var_dump($_SERVER); //Muestra estructura de datos de $_SERVER

        //Constante
        const CURSO = '2ºDAW';

        define('CICLO', 'DAW');
        echo '<h3>Curso: '.CURSO.'-CICLO: '.CICLO.'</h3>';

        //constante predefinida
        echo '<h3>Version de PHP: '.PHP_VERSION.'</h3>';

        //OPERADORES: Igual que en jaca
        //Diferentes: Potencia **
        echo '<h3> 2 elevado a 3: '.(2**3).'</h3>';

        //comparacion de valor y tipo === !==
        $v1=1;
        $v2= 1;
        if($v1==$v2){
            echo 'Las Variables tienen el mismo valor';
        }
        else{
            echo 'Las variables no tienen el mismo valor';
        }

        if($v1===$v2){
            echo '<br>Las Variables tienen el mismo valor y tipo';
        }
        else{
            echo '<br>Las variables no tienen el mismo valor o tipo';
        }

        //Estructuras selectivas
        //IF/ELSEIF/ELSE
        //OPERADOR TERNARIO (condicion?valorSiVerdadero:valorSiFalso)
        $nota = 3;
        $calificacion = $nota<5?'suspenso':'aprobado';

        echo '<h3>Nota: '.$nota.'-'.$calificacion.'</h3>';

        //ESTRTUCTURAS DE CONTROL
        // = que en java
        //Diferente: foreach: para recorrer arrays
        $colores = array('rojo', 'verde', 'azul');

        echo '<h3>';
        foreach($colores as $valor){
            echo $valor.' ';
        }
        echo '</h3>';

        //Recupera el inice del array
        echo '<h3>';
        foreach($colores as $indice => $valor){
            echo 'colores['.$indice.']='.$valor.' ';
        }
        echo '</h3>';

        //Ejercicio
        //Mostrar una tabla con las tablas de multiplicar del 0 al 10
        //Deber alternar el color por numero
        
    ?>
    <table border="1">
        <?php
            for($i = 1; $i<=10; $i++){
                //pintar cada tabla en una fila nueva
                ?>
                <tr bgcolor="<?php echo ($i%2!==0?'grey':'white') ?>"> <!-- Filas pares gris e impares blanco-->
                    <?php
                        for($j=1; $j<=10;$j++){
                            echo '<td>'.$i*$j.'</td>';
                        }
                    ?>

                </tr>
                <?php
            }
        ?>
    </table>

    
</body>
</html>