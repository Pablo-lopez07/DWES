<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Clase05_f1.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="idFecha">Fecha</label>
            <input type="date" name="fecha" id="idNombre" placeholder="Introduce nombre" 
            value="<?php echo date("Y-m-d")?>">
        </div>
        <div>
            <label for="idHora">Hora</label>
            <input type="time" name="hora" id="idHora" 
            value="<?php echo date('h:i:s') ?>">
        </div>

        <div>
            <label>Nombre</label><br>
            <input type="text" name="nombre" id="" placeholder="Introduce nombre">
        </div>
        <div>
            <label for="idPass">Password</label><br>
            <input type="password" name="pass" id="idPass" placeholder="Introduce contraseña">
        </div>
        <div>
            <label for="idCurso">Curso</label><br>
            <select name="curso" id="idCurso">
                <option value="1DAW">1ºDAW</option>
                <option>2ºDAW</option>
                <option>1ºDAM</option>
                <option>2ºDAW</option>
            </select>
        </div>
        <!-- Select multiple, se puede elegir mas de una opcion-->

        <div>
            <label for="idAsig">Asignaturas</label><br>
            <select name="asig[]" id="idAsig" multiple>
                <option value="DWES">Desarrollo Web en entorno servidor</option>
                <option value="BD">Base de datos</option>
                <option value="DAW">Despliegue de Aplicaciones Web</option>
                <option value="AD">Aceso a Datos</option>
            </select>
        </div>  
        <div>
            <label for="tipo">Tipo</label><br>
            <label for="idA1">Alumno</label>
            <input type="radio" name="tipo" id="idA1" value="Alumno" checked><br>
            <label for="idP1">Profesor</label>
            <input type="radio" name="tipo" id="idP1" value="Profesor">
        </div>
        <div>
            <label for="idBeca">Otros datos</label><br>
            <label for="idBeca">Beca MEC</label>
            <input type="checkbox" name="otros[]" id="idBeca" value="Beca MEC"><br>
            <label for="idTr">Transporte</label>
            <input type="checkbox" name="otros[]" id="idTr" value="Tranporte"><br>
            <label for="idCB">Carnet Biblioteca</label>
            <input type="checkbox" name="otros[]" id="idCB" value="Carnet Biblioteca">
        </div>
        <div>
            <label for="idFoto">Foto</label><br>
            <input type="file" name="foto" id="idFoto">

        </div>
         <div>
            <label for="idComen">Comentario</label><br>
            <textarea name="comentario" id="idComen" placeholder="Otros datos de interes"></textarea>
        </div>
        <div>
            <button type="submit" name="enviar">Enviar</button>
            <button type="reset" name="limpiar">Limpiar</button>
        </div>
    </form>
</body>
</html>
