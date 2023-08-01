<?php

declare(strict_types=1);

namespace App\Models;


readonly class AuthUser
{
    public string $name;
    public string $password;
    public function __construct(
        string $name,
        string $password
    )
    {
        $this->name = $name;
        $this->password = $password;
    }
}
