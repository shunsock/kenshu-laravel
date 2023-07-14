<?php

declare(strict_types=1);

namespace App\Core;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidFileException;
use PDO;
use PDOException;

class DBConnector
{
    public static function connect(): PDO
    {
        try {
            Dotenv::createImmutable(paths:'/app')->load();
            $host = $_ENV['DB_HOST'];
            $db = $_ENV['DB_DATABASE'];
            $port = $_ENV['DB_PORT'];
            $user = $_ENV['DB_USERNAME'];
            $pass = $_ENV['DB_PASSWORD'];
            $dsn = "mysql:host=$host;dbname=$db;port=$port";
        } catch (InvalidFileException $e) {
            throw new InvalidFileException($e->getMessage(), (int)$e->getCode());
        }
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
