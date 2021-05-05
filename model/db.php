<?php

    $server = "localhost";
    $username = "root";
    $password = "root";
    $table = "casablanca";

    try {
        $conn = new mysqli($server, $username, $password, $table);
    } catch (Exception $e) {
        die('conexion fallida:'.$e->getMessage());
    }