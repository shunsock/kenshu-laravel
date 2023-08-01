<?php

declare(strict_types=1);

namespace App\Models;

final readonly class AuthDTO
{
    public string $inputtedNameFromForm;
    public string $inputtedPasswordFromForm;

    public function __construct(
        string $inputtedNameFromForm,
        string $inputtedPasswordFromForm,
    )
    {
        $this->inputtedNameFromForm = $inputtedNameFromForm;
        $this->inputtedPasswordFromForm = $inputtedPasswordFromForm;
    }
}
