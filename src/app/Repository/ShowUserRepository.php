<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\DBConnector;
use App\Models\AuthUser;
use InvalidArgumentException;
use PDO;

class ShowUserRepository
{
    public static function checkIfUserExist(string $username): bool
    {
        // get user data from database
        $pdo = DBConnector::connect();
        $sql = 'SELECT * FROM users WHERE name = :user_name';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(
            param: ':user_name',
            value: $username
        );
        $stmt->execute();
        $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);


        // If $user is not false, it means that the user exists.
        if ($user !== false) {
            return true;
        } else {
            return false;
        }
    }


    public static function getData(string $name): AuthUser
    {
        $pdo = DBConnector::connect();
        $query = "SELECT * FROM users WHERE name = :name";
        $stmt = $pdo->prepare(
            query: $query
        );
        $stmt->bindValue(
            param: ':name',
            value: $name
        );
        $stmt->execute();
        $res = $stmt->fetchAll(); // fetchAll() returns false if no data is found

        if ($res === false || count($res) === 0) {
            throw new InvalidArgumentException(
                message: "存在しないユーザーです"
            );
        } else {
            return new AuthUser(
                name: $res[0]['name'],
                password: $res[0]['password']
            );
        }
    }

    public static function getIdFromName(string $username)
    {
        $pdo = DBConnector::connect();
        $query = "SELECT id FROM users WHERE name = :name";
        $stmt = $pdo->prepare(
            query: $query
        );
        $stmt->bindValue(
            param: ':name',
            value: $username
        );
        $stmt->execute();
        $res = $stmt->fetchAll(); // fetchAll() returns false if no data is found

        if ($res === false || count($res) === 0) {
            throw new InvalidArgumentException(
                message: "存在しないユーザーです"
            );
        } else {
            return $res[0]['id'];
        }
    }
}
