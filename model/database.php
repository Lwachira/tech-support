<?php
    $dsn = 'mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=tech_support';
    $username = 'bc1bf7e6d41868';
    $password = '94533f7b';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
