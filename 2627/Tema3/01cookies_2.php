<?php

    if(!isset($_COOKIE['numV'])){
        $numVisitas = 1;
    }
    else{
        $numVisitas = $_COOKIE['numV'] + 1;
    }
    setcookie('numV', $numVisitas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NUMERO DE VISITAS DE LA PAGINA <?php echo $numVisitas; ?></h1>
</body>
</html>