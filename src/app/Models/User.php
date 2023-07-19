<?php

declare(strict_types=1);

namespace App\Models;

final readonly class User
{
    public string $name;
    public string $email;
    public string $passwordHash;

    /**
     * @param string $name
     * @param string $email
     * @param string $passwordHash
     */
    public function __construct(
        string $name,
        string $email,
        string $passwordHash
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }
}
