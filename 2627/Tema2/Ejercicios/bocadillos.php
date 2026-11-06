<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BOCATERIA</h1>
    <form action="" method="post">
        <div>
            <label for="idBocatas">BOCADILLO</label><br>
            <select name="bocatas" id="idBocatas">
                <option value="tortilla">Tortilla-(2,50€)</option>
                <option value="serranito">Serranito-(4,50€)</option>
                <option value="lomo">Lomo con pimiento-(3€)</option>
            </select>
        </div>
        <div>
            <label for="">EXTRAS</label><br>
            <label for="idPatatas">Patatas(2€)</label>
            <input type="checkbox" name="extra[]" id="idPatatas">
            <label for="idBebida">Bebida(3€)</label>
            <input type="checkbox" name="extra[]" id="idBebida">
        </div>
        <button type="submit" name="pagar">PAGAR</button>
    </form>

    <?php 

        $precioBocata = 0;
        $precioExtra = 0;

        (isset($_POST['bocatas']) && $_POST['bocatas'] == 'tortilla'?$precioBocata = 2.50 : '');
        (isset($_POST['bocatas']) && $_POST['bocatas'] == 'serranito'?$precioBocata = 4.50 : '');
        (isset($_POST['bocatas']) && $_POST['bocatas'] == 'lomo'?$precioBocata = 3 : '');
        echo (!isset($_POST['bocatas'])?'Bocadillo no rellenado':'');

        if(isset($_POST['extra'])){
            if($_POST['bocatas'] != 'tortilla' && in_array('idPatatas',$_POST['extra'] )){
                $precioExtra = $precioExtra + 2;
            }
            else if($_POST['bocatas'] == 'tortilla' && $_POST['extra'] == 'idPtatas'){
                echo '<h1>No puedes elegit patatas si ha elegido bocadillo de tortilla</h1>';
            }
            if($_POST['extra'] == "idBebida"){
                $precioExtra = $precioExtra +3;
            }
        }
        

        if(isset($_POST['pagar'])){
            echo '<p> Extras: '.$precioExtra;
            echo '<p>Precio total de:'.$precioBocata + $precioExtra.'</p>';
        }
        

    ?>

</body>
</html>