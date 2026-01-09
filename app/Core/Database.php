<?php
declare(strict_types=1);

namespace App\Core;
use PDO;
use PDOException;
class Database
{
 private static ?PDO $instance = null;
 private function __construct(){}
 private function __clone(){}
 private function __wakeup(){}
    public static function getInstance(): PDO {
        if (self::$instance === null) {
            $host = 'localhost';
            $db   = 'taskflow';
            $user = 'root';      
            $pass = '';      
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            try {
                self::$instance = new PDO($dsn, $user, $pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}