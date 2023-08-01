<?php

namespace App\Service;

use App\Models\AuthDTO;
use App\Models\AuthUser;
use App\Repository\ShowUserRepository;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    public static function login(
        AuthDTO $dto
    ): bool
    {
        // TODO: get user from database when initialized
        $user = ShowUserRepository::getData(
            name: $dto->inputtedNameFromForm
        );


        // TODO: validate password
        return self::validatePassword(
            inputUserPasswordNotHashed: $dto->inputtedPasswordFromForm,
            trueUserPasswordHashed: $user->password
        );
    }

    private static function validatePassword(
        string $inputUserPasswordNotHashed,
        string $trueUserPasswordHashed
    ): bool
    {
        return Hash::check(
            $inputUserPasswordNotHashed,
            $trueUserPasswordHashed
        );
    }
}
