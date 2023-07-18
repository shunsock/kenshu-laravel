<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\DBConnector;
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
}
