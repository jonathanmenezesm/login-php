<?php
    // session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formularioteste";

    // criar conexão com banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

?>