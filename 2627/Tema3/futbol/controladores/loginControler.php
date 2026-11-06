<?php
    require_once RAIZ.'/modelos/ModeloLogin.php';

    class loginControler{
        public $modelo;

        function __construct(){
            $this->modelo = new ModeloLogin();
        }

        function login(){
            $texto = 'Texto generado en C1Controler, en la funcion f1';
            //cargar la vista
            require RAIZ.'/vistas/vista_login.php';
        }

        function loguear(){
            global $error;
            if (empty($_POST['dni']) || empty($_POST['ps'])) {
                $error[] = 'debes rellenar dni y contraseña';
                require RAIZ.'/vistas/vista_login.php';
            }else {
                $error[] = $this->modelo->loguear($_POST['dni'],$_POST['ps']);
            }
        }
    }
    

?>