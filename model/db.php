<?php

    $server = "localhost";
    $username = "root";
    $password = "root";
    $table = "casablanca";

    try {
        $conn = new mysqli($server, $usernme, $password, $table);
    } catch (Exception $e) {
        die('conexion fallida:'.$e->getMessage());
    }