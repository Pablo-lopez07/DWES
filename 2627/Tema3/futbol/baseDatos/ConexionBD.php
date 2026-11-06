<?php

    class ConexionBD{
        public static $conexion;
        
        static function conectar() {
            try {
                
                if (!file_exists(RAIZ.'/.config')) {
                    throw new Exception('No existe el fichero de configuracion');
                }
                $tmp = file(RAIZ.'/.config', FILE_IGNORE_NEW_LINES);

                $datosC = array();
                foreach ($tmp as $t) {
                    $linea = explode('=',$t);

                    $datosC[$linea[0]] = $linea[1];
                }
                
                $url = 'mysql:host='.$datosC['HOST'].';port='.$datosC['PUERTO'].';dbname='.$datosC['BD'];

                self::$conexion = new PDO($url, $datosC['USUARIO'],$datosC['PS']);

            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }

?>