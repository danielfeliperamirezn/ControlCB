<?php
    require "../model/db.php";

    //$data = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST)) {
        $name = $_POST["nombre"];
        $cuenta = $_POST['chaturbate'];
        $dolar = $_POST["dolar"];
    }
?>

<html>

    <?php 
        echo $name;
        echo $cuenta;
        echo $dolar;
    ?>
</html>

