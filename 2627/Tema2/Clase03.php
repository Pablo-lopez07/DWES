<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $misDatos = array('Pablo', 'López', 19, 1.85, false);

        //Mostrar datos con foreach
        foreach($misDatos as $clave=>$valor){
            echo '<p>Posicion: '.$clave.'- Valor: '.$valor.'</p>';
        }

        //Mostrar Estructura de array
        var_dump($misDatos);

        //Añadir un elemento al array
        $misDatos[] = 'C/ Antonio, Concha, 71, 10300';
        echo '<h3>Añadimos direccion</h3>';
        var_dump($misDatos);

        //Añadir elementos en la posicion 100
        $misDatos[100] = 'DAW';
        echo '<h3>Añadimos el curso a la posicion 100 </h3>';
        var_dump($misDatos);

        //Array asociativos, la calve no es un numero si no un tecto
        $misDatosA = array('Nombre'=>'Pablo', 'Apellido'=>'López', 'edad'=>19, 'altura'=>1.85, 'Alumno'=>true);

        foreach($misDatosA as $clave=>$valor){
            echo '<p>Posicion: '.$clave.'- Valor: '.$valor.'</p>';
        }
        var_dump($misDatosA);

        $misDatosA['Direccion'] = 'C/ Antonio, Concha, 71, 10300';
        echo '<h3>Añadimos direccion</h3>';
        var_dump($misDatosA);

        //añadir a los dos array un nuevo elemento donde se almacenen la direccion en un array asociativo
        $misDatosA['Direccion2'] = array('Tipo via'=>'Travesia', 'Nombre'=>'de la Emita', 'Numero'=>3, 'CP'=>10335);
        echo '<h3>Añadimos direccion</h3>';
        var_dump($misDatosA);

        $misDatos[] = array('Tipo via'=>'Travesia', 'Nombre'=>'de la Emita', 'Numero'=>3, 'CP'=>10335);
        echo '<h3>Añadimos direccion</h3>';
        var_dump($misDatos);

        echo '<table border="2">';

            echo '<tr>';

                foreach($misDatos as $clave=>$valor){
                    if(is_array($valor)){
                        echo '<td><table border="3" bordercolor= #008000><tr>';
                            foreach($valor as $c=>$v){
                               echo '<td>'.$c.'<br>'.$v.'</td>'; 
                            }
                        echo '</tr></table></td>';
                    }else{
                        echo '<td>'.$clave.'<br>'.$valor.'</td>';
                    }
                }

            echo '</tr>';

        echo '</table>';


        echo '<table border="2">';

            echo '<tr>';

                foreach($misDatosA as $clave=>$valor){
                    if(is_array($valor)){
                        echo '<td><table border="3" bordercolor= #008000><tr>';
                            foreach($valor as $c=>$v){
                               echo '<td>'.$c.'<br>'.$v.'</td>'; 
                            }
                        echo '</tr></table></td>';
                    }else{
                        echo '<td>'.$clave.'<br>'.$valor.'</td>';
                    }
                }

            echo '</tr>';

        echo '</table>';


        //funciones
        function suma($numeros){
            $resultado = 0;
            foreach ($numeros as $valor){
                if(is_int($valor)){
                    $resultado+=$valor;
                }else{
                    return null;
                }
                
            }
            return $resultado;
        }
        
        $num=array(2,'hola',4);
        echo '<h3>Suma: '.(suma($num)==null?'error en los datos':suma($num)).'</h3>';

        //Funcion Recursiva
        function pintarArray($array){
            echo '<table border=1px>';
                echo '<tr>';
                foreach($array as $item){
                    echo '<td>';
                        if(!is_array($item)){
                            echo $item;
                        }
                        else{
                            pintarArray($item);
                        }

                    echo '</td>';

                }
                echo '</tr>';
            echo '</table>';
        }

        //Probar pintar array
        echo '<h3>FUNCION RECURSIVA</h3>';
        pintarArray(array('Que mal dia', 'Hoy es lunes'));
        pintarArray($misDatos);
    ?>
</body>
</html>