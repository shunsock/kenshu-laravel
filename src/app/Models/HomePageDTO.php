<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Http\Request;

final readonly class HomePageDTO
{
    public string $message;
    public function __construct(
        string $message
    )
    {
        $this->message = $message;
    }
}
