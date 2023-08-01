<?php

declare(strict_types=1);

namespace App\Service;
use App\Models\SignupDTO;
use App\Repository\CreateUserRepository;
use App\Repository\ShowUserRepository;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;

final class SignupService
{
    public static function SignupUser(SignupDTO $dto): void
    {
        $isUserExist = ShowUserRepository::checkIfUserExist(username: $dto->inputtedUserName);
        if ($isUserExist) {
            throw new InvalidArgumentException();
        }
        $username = $dto->inputtedUserName;
        $email = $dto->inputtedEmail;
        $hashedPassword = Hash::make($dto->inputtedPassword);
        CreateUserRepository::CreateUser(
            username: $username,
            password: $hashedPassword,
            email: $email
        );
    }
}
