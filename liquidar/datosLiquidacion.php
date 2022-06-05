<?php
    require "../model/db.php";

    //$data = json_decode(file_get_contents('php://input'), true);
    $dataForm = [[]];
    if(isset($_POST)) {
        $name = $_POST["NombreModelo"];
        $cuenta = $_POST['chaturbate'];
        $dolar = $_POST["dolar"];
    }
?>

<html>

    <h1>Hello World</h1>

    <?php 
        print_r($name) ;

        echo $dolar;
    ?>
</html>

