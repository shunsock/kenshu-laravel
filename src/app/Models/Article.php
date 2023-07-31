<?php

declare(strict_types=1);

namespace App\Models;

readonly class Article
{
    public int $id;
    public string $title;
    public string $body;
    public string $author;
    public string $createdAt;
    public string $updatedAt;
    public string $image_path;

    public function __construct(
        int $id,
        string $title,
        string $body,
        string $author,
        string $createdAt,
        string $updatedAt,
        string $image_path
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->image_path = $image_path;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->image_path;
    }
}
