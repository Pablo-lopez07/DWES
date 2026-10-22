<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1">
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2">
        <br><br>
        <input type="submit" name="operacion" id="suma" value="+">
        <input type="submit" name="operacion" id="resta" value="-">
        <input type="submit" name="operacion" id="multiplicacion" value="*">
        <input type="submit" name="operacion" id="division" value="/">
    </form>
    <?php
        if (isset($_POST['operacion'])) {
            (!empty($_POST['num1'])? $num1 = $_POST['num1']: $error = 'Numero 1 no rellenado');
            (!empty($_POST['num2'])?$num2 = $_POST['num2']: $error = 'Numero 2 no rellenado');
            $operacio = $_POST['operacion'];

            
            
            if (isset($error)) {
                echo '<h3>'.$error.'</h3>';
            }
            else {
                switch ($operacio) {
                    case '+':
                        $resultado = $num1 + $num2;
                        break;
                        
                    case '-':
                        $resultado = $num1 - $num2;
                        break;
                    
                    case '*':
                        $resultado = $num1 * $num2;
                        break;
                    case '/':
                        $resultado = $num1 / $num2;
                        break;
                }
                echo '<p>Resultado: '.$num1.$operacio.$num2.'='.$resultado.'</p>';
            }

        }
    ?>
</body>
</html>