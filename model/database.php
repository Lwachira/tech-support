<?php
    $dsn = 'mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=acsm_12a760e9a58aea1';
    $username = 'bc1bf7e6d41868';
    $password = 'cd92c7b7';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }

function display_db_error($error_message) {
    global $app_path;
    include '../errors/database_error.php';
    exit();
}

