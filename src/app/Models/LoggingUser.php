<?php

declare(strict_types=1);

namespace App\Service;


readonly class LoggingUser
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
