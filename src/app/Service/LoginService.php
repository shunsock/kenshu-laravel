<?php

namespace App\Service;

use App\Models\LoggingDTO;
use App\Models\LoggingUser;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    public static function login(
        LoggingDTO $dto
    ): bool
    {
        // TODO: get user from database when initialized
        $user = new LoggingUser(
            name: $dto->inputtedNameFromForm,
            password: $dto->inputtedPasswordFromForm
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
            value: $inputUserPasswordNotHashed,
            hashedValue: $trueUserPasswordHashed
        );
    }
}
