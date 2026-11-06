<?php
    require_once 'Modelo.php';
    //cargar fichero alumno si existe
    $fichero = new Modelo();

    $alumnos = $fichero->cargarAlumnos();
    if(isset($_POST['enviar'])){

        if(empty($_POST['dni'])||empty($_POST['nombre'])||empty($_POST['fecha'])||empty($_POST['sexo'])){

            $error = 'El dni, nombre, fecha o sexo no pueden estar vacio';

        }
        else{

            if(isset($_POST['opciones']) && in_array('bus',$_POST['opciones'])){
                $bus='Si';
            }else{
                $bus='no';
            }
            
            $beca=(isset($_POST['opciones']) && in_array('beca',$_POST['opciones'])?'Si':'No');
            $a = new Alumno($_POST['dni'], $_POST['nombre'], $_POST['fecha'],$bus, $_POST['sexo'], $beca);

            if($fichero->guardarAlumno($a)){
                $mensaje = 'alumno guardado correctamente';
                $alumnos = $fichero ->cargarAlumnos();
            }
            else{
                $error = 'Se ha producido un error al guardar alumno';
            }
        }

        
    }
?>