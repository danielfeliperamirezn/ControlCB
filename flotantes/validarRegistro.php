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

    if(!empty($nombre)) { 
        $sql = "INSERT INTO modelos (nombre, cedula, celular, ganancia, ingreso, nacionalidad, cumpleanos) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stamen = $conn->prepare($sql);
        $stamen->bind_param('sssssss', $nombre, $cedula, $celular, $porcentajeGanancias, $fechaderegistro, $nacionalidad, $cumpeanos);

        if($stamen->execute()) {
            $conn->affected_rows;
            $cuerpoMensaje = "registro exitoso";
        } else {
            $cuerpoMensaje = "registro Fallido";
        }
        
    } else {
        $cuerpoMensaje = "No se pudo Registrar el modelo";
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validando registro...</title>
</head>
<body> 

    print_r($cuerpoMensaje);

</body>
</html>