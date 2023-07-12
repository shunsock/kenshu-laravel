<?php

declare(strict_types=1);

namespace App\Service;

use App\Core\Request;

class Message
{
    public static function extract(): string
    {
        $req = new Request(
            request_method: $_SERVER['REQUEST_METHOD'],
            uri: $_SERVER['REQUEST_URI'],
            get_param: $_GET,
            post_data: $_POST
        );
        return $req->getMessageFromParam();
    }
}
