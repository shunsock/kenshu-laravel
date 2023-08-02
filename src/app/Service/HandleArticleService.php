<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\ArticleEditDTO;
use App\Models\CreateArticleDTO;
use App\Repository\HandleArticleRepository;
use App\Repository\ShowUserRepository;
use PDOException;

class HandleArticleService
{
    public static function create(CreateArticleDTO $dto): bool
    {
        try {
            $id = ShowUserRepository::getIdFromName(username: $dto->author);
            if ($id === null) {
                return false;
            }

            HandleArticleRepository::create(
                title: $dto->title,
                userId: $id,
                thumbnail:$dto->thumbnail,
                body: $dto->body
            );
            return true;
        } catch (PDOException) {
            return false;
        }
    }

    public static function edit(ArticleEditDTO $dto): bool
    {
        try {
            HandleArticleRepository::editArticleById(
                title: $dto->title,
                thumbnail: $dto->thumbnail,
                body: $dto->body,
                id: (int) $dto->id
            );
            return true;
        } catch (PDOException) {
            return false;
        }
    }

    public static function delete(int $id): bool
    {
        try {
            HandleArticleRepository::deleteArticleById(id: $id);
            return true;
        } catch (PDOException) {
            return false;
        }
    }
}
