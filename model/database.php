<?php
    $dsn = 'mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=tech_support';
    $username = 'bc1bf7e6d41868@40.122.124.194';
    $password = 'cd92c7b7';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
