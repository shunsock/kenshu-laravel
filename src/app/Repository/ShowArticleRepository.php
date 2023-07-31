<?php

namespace App\Repository;

use App\Core\DBConnector;
use App\Models\Article;
use PDO;

class ShowArticleRepository
{
    public static function getData(): array
    {
        $pdo = DBConnector::connect();
        $query = <<<EOT
            SELECT
                post.id,
                post.title,
                post.user_id,
                post.thumbnail,
                post.body,
                post.updated_at,
                post.created_at,
                users.name as user_name
            FROM post
            JOIN users  ON post.user_id = users.id
            ORDER BY created_at DESC
        EOT;
        $stmt = $pdo->prepare(
            query: $query
        );
        $stmt->execute();
        $res = $stmt->fetchAll(); // fetchAll() returns false if no data is found
        if ($res === false) {
            return [];
        } else {
            return $res;
        }
    }

    public static function getDataById(int $id): array
    {
        $pdo = DBConnector::connect();
        $query = <<<EOT
            SELECT
                post.id,
                post.title,
                post.user_id,
                post.thumbnail,
                post.body,
                post.updated_at,
                post.created_at,
                users.name as user_name
            FROM post
            JOIN users  ON post.user_id = users.id
            WHERE post.id = :id
        EOT;
        $stmt = $pdo->prepare(
            query: $query
        );
        $stmt->bindValue(
            param: ':id'
            , value: $id
            , type: PDO::PARAM_INT
        );
        $stmt->execute();
        $res = $stmt->fetch(); // fetch() returns false if no data is found
        if ($res === false) {
            return [];
        } else {
            return $res;
        }
    }
}
