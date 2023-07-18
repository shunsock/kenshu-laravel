<?php

declare(strict_types=1);

namespace App\Service;
use App\Models\SignupDTO;
use App\Repository\CreateUserRepository;
use App\Repository\ShowUserRepository;
use InvalidArgumentException;

final class SignupService
{
    public static function SignupUser(SignupDTO $dto): void
    {
        $isUserExist = ShowUserRepository::checkIfUserExist(username: $dto->inputtedUserName);
        if ($isUserExist) {
            throw new InvalidArgumentException();
        }
        CreateUserRepository::CreateUser(
            $dto->inputtedUserName,
            $dto->inputtedPassword,
            $dto->inputtedEmail
        );
    }
}
