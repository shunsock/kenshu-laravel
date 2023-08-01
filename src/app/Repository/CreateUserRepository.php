<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\DBConnector;
use PDO;

readonly final class CreateUserRepository
{
    public static function CreateUser(
        string $username,
        string $password,
        string $email,
        string $image = 'image/default.png'
    ): void
    {
        $pdo = DBConnector::connect();
        $sql = 'INSERT INTO users (name, password, email, user_image_path) VALUES (:user_name, :password, :email, :image)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':user_name', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->execute();
    }
}
