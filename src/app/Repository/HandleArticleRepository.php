<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\DBConnector;
use PDO;

class HandleArticleRepository
{
    public static function create(
        string $title,
        int $userId,
        string $thumbnail,
        string $body
    ): void
    {
        $pdo = DBConnector::connect();
        $sql = "INSERT INTO post (title, user_id, thumbnail, body) VALUES (:title, :userId, :thumbnail, :body)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindValue(':thumbnail', $thumbnail, PDO::PARAM_STR);
        $stmt->bindValue(':body', $body, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function deleteArticleById(string $id): void
    {
        $pdo = DBConnector::connect();
        $sql = "DELETE FROM post WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
