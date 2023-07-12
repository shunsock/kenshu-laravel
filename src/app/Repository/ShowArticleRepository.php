<?php

namespace App\Repository;

use App\Core\DBConnector;

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
}
