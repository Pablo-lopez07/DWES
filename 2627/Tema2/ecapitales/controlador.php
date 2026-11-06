<?php
    function cargarPaises(){
        $paises = array();

        if (file_exists('.datos')) {
            $tmp = file('.datos',FILE_IGNORE_NEW_LINES);

            foreach ($tmp as $t) {
                $campos = explode(';',$t);
                $paises[]=$campos;

            }
        }

        return $paises;
    }

    $paises = cargarPaises();

    $max = sizeof($paises);

    $pais = rand(1, $max);


?>