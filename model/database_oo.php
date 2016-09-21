<?php
class Database {
    private static $dsn = 'mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=tech_support';
    private static $username = 'bc1bf7e6d41868';
    private static $password = '94533f7b';
    private static $db;

    function __construct(){}

    public static function connect(){
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}