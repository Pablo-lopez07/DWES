<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>BOCADILLOS</h2>
        
        <select name="bocadillo" id="">
            <option value="tortilla">Tortilla - 4€</option>
            <option value="lomo">Lomo Con Piemientos - 5€</option>
            <option value="bacon">Bacon queso - 3,5€</option>
        </select><br>
        <label for="">Patatas - 2€</label>
        <input type="checkbox" name="patatas" id="">
        <label for="">Bebida - 3€</label>
        <input type="checkbox" name="bebida" id=""><br>
        
        <button type="submit" name="pagar">Pagar</button>
    </form>

    <?php
        if (isset($_POST['pagar'])) {
            $precioBocata = 0;
            $precioExtras = 0;

            if(isset($_POST['bocadillo'])){

                switch ($_POST['bocadillo']) {
                    case 'tortilla':
                        $precioBocata = 4;
                        $tipoBocata = 'Tortilla';
                        break;

                    case 'lomo':
                        $precioBocata = 5;
                        $tipoBocata = 'Lomo con pimientos';
                        break;

                    case 'bacon':
                        $precioBocata = 3.5;
                        $tipoBocata = 'Bacon queso';
                        break;
                }
            
            }
           
            if (!empty($_POST['patatas'])) {
                $precioExtras = 2;
                $patatas = 'Patatas - 2€';
            }
            if (!empty($_POST['bebida'])) {
                $precioExtras = $precioExtras + 3;
                $bebidas = 'Bebidas - 3€';
            }

            echo '<h3>Cuenta</h3>';
            echo '<p>Bocatillo: '.$tipoBocata.' - '.$precioBocata.'€</p>';
            if(!empty($patatas) || !empty($bebidas)){
                echo '<p>Extras: </p>';
                if (!empty($patatas)) {
                    echo '<p>'.$patatas.'</p>';
                }
                if (!empty($bebidas)) {
                    echo '<p>'.$bebidas.'</p>';
                }
            }
            echo '<h3>Total: '.$precioExtras + $precioBocata.'€</h3>';

        }
    ?>
</body>
</html>