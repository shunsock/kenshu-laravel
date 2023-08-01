<?php

declare(strict_types=1);

namespace App\Models;

readonly class LoggedUserDTO
{
    public string $username;

    /**
     * LoggedUserDTO constructor.
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }
}
