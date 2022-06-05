<?php

    require "../model/db.php";

    $data = $_POST;
    $nombre = $data["nombre"];
    $cedula = $data["cedula"];
    $celular = $data["celular"];
    $porcentajeGanancias = $data["porcentaje"];
    $fechaderegistro = $data["fechadeingreso"];
    $nacionalidad = $data["nacionalidad"];
    $cumpeanos = $data["cumpleanos"];
    $nombreArtistico = $data["nombreArtistico"];
    $tipoDeTrabajo =$data["tipoDeTrabajo"];
    $banco = $data["banco"];
    $tipoDeCuenta = $data["tipoDeCuenta"];
    $numeroDeCuenta = $data["numeroDeCuenta"];
    $chaturbate =  $data["chaturbate"];
    $bonga =  $data["bonga"];
    $stripchat =  $data["stripchat"];
    $xlove = $data["xlove"];
    $f4f = $data["f4f"];
    $streamte = $data["streamate"];
    $cams = $data["cams"];
    $cam4 = $data["cam4"];
    $paypal = $data["paypal"];
    $jasmin = $data["jasmin"];

    if(!empty($nombre)) { 
        $sql = "INSERT INTO modelos2 (nombre, cedula, celular, porcentaje, ingreso, nacionalidad, cumpleanos, nombreArtistico, tipoDeTrabajo, banco, tipoDeCuenta, numeroDeCuenta) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stamen = $conn->prepare($sql);
        $stamen->bind_param('ssssssssssss', $nombre, $cedula, $celular, $porcentajeGanancias, $fechaderegistro, $nacionalidad, $cumpeanos, 
        $nombreArtistico, $tipoDeTrabajo, $banco, $tipoDeCuenta, $numeroDeCuenta );
        if($stamen->execute()) {
            $conn->affected_rows;
            $cuerpoMensaje = "registro exitoso";
        } else {
            $cuerpoMensaje = "registro Fallido";
        }       
    };

    $sqlPage = "INSERT INTO paginas (chaturbate, bonga, stripchat, xlove, f4f, streamate, cams, cam4, paypal, jasmin) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $saveData = $conn->prepare($sqlPage);
    $saveData->bind_param('sssssssss', $chaturbate, $bonga, $stripchat, $xlove, $f4f, $streamate, $cams, 
    $cam4, $paypal, $jasmin );
    if($saveData->execute()) {
        $conn->affected_rows;
    } else {
        $cuerpoMensaje = "No se pudo Registrar el modelo";
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deice-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validando registro...</title>
</head>
<body> 

</body>
</html>