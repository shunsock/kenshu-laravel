<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Http\Request;

final readonly class HomePageDTO
{
    public string $message;
    public function __construct(
        Request $req
    )
    {
        $this->message = $req->query(
            key: 'message',
            default: ''
        );
    }
}
