<?php

    class ModeloLogin{
        public function loguear($dni, $ps){
            
            try {
                $consulta = ConexionBD::$conexion->prepare('SELECT * from usuarios
                        where dni = ? and ps=sha2(?,512)');
                if ($consulta->execute([$dni, $ps])) {
                    
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }
    

?>