<?php
    require_once 'Alumno.php';

    class Modelo{

        private $nombreF = 'datos/alumnos.txt';

        function __construct(){
        }
        
        function guardarAlumno(Alumno $a){
            try{
                $f = fopen($this->nombreF,'a+');
                fwrite($f,$a->getDni().';'.$a->getNombre().';'.$a->getFn().';'.$a->getBus().';'.$a->getSexo().';'.$a->getBeca().PHP_EOL);
                return true;
            }
            catch(\Throwable $th){
                $error=$th->getMessage();
            }
            return false;
        }
        function cargarAlumnos(){

            $resultado = array();

            if(file_exists($this->nombreF)){
                $texto = file($this->nombreF, FILE_IGNORE_NEW_LINES);

                foreach($texto as $t){
                    $datos = explode(';',$t);
                    $a = new Alumno($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5]);
                    $resultado[] = $a;
                }

            }
            return $resultado;

        }

        /**
         * Get the value of nombreF
         */ 
        public function getNombreF()
        {
                return $this->nombreF;
        }

        /**
         * Set the value of nombreF
         *
         * @return  self
         */ 
        public function setNombreF($nombreF)
        {
                $this->nombreF = $nombreF;

                return $this;
        }
    }
?>