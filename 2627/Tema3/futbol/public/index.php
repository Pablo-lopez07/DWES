<?php
    //crear constante que contenga la carpeta del proyecto
    //__DIR__ contiene la ruta absoluta de la carpeta en la que esta el fichero donde se pone.
    define ('RAIZ', __DIR__.'/..');

    //array global para los errores
    $error=array();
    
    //Iniciar sesion
    session_start();
    

    //Cargar datos de configutacion
    require_once RAIZ.'/baseDatos/ConexionBD.php';
    ConexionBD::conectar();



    //Obtener el controlador de la ruta
    $controlador = $_GET['controlador']??'login';

    //Creamos $accion con la acion de la url, y si no viene ninguna, ponemos f1 como accion

    $accion=$_GET['accion']??'login';

    //Como los controladores son calses y empiezan por letra mayuscula, 
    //convertimos a mayuscula la primera letra de $controlador con la funcopm ucfirst().
    $controlador = ucfirst($controlador);

    //Cargamos el fichero donde esta definido el controlador
    require_once RAIZ.'/controladores/'.$controlador.'Controler.php';

    //Creamos un objeto controlador
    $clase = $controlador.'Controler';
    $objeto = new $clase();

    //Llamamos a la fincion que hay en accion
    $objeto->$accion();
?>