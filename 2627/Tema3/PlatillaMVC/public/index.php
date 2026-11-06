<?php
    //crear constante que contenga la carpeta del proyecto
    //__DIR__ contiene la ruta absoluta de la carpeta en la que esta el fichero donde se pone.
    define('RAIZ', __DIR__.'/..');

    //Iniciar sesion (aun no lo hemos visto)

    //Cargar datos de configutacion (aun no lo hemos visto)

    //Obtener el controlador de la ruta
    //Si no se especifica ningino, se toma C1, como controlador por defecto
    //La ruta debe ser: http://~/index.php=controlador=c1&accion=f1
    /**if (isset($_GET['controlador'])) {
        $controlador = $_GET['controlador']
    }else {
        $controlador = 'C1'
    }**/
    $controlador = $_GET['controlador']??'C1';

    //Creamos $accion con la acion de la url, y si no viene ninguna, ponemos f1 como accion

    $accion=$_GET['accion']??'f1';

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