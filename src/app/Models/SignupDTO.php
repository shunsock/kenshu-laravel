<?php

declare(strict_types=1);

namespace App\Models;

final readonly class SignupDTO
{
    public string $inputtedUserName;
    public string $inputtedPassword;
    public string $inputtedEmail;

    public function __construct(
        string $inputtedUserNameFromForm,
        string $inputtedPasswordFromForm,
        string $inputtedEmailFromForm
    )
    {
        $this->inputtedUserName = $inputtedUserNameFromForm;
        $this->inputtedPassword = $inputtedPasswordFromForm;
        $this->inputtedEmail = $inputtedEmailFromForm;
    }
}
