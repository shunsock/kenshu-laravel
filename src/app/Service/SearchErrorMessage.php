<?php

declare(strict_types=1);

namespace App\Service;

readonly class SearchErrorMessage
{
    const errorMessages = [
        'InvalidFileException' => '読み込みに失敗しました',
        'InvalidArgumentException' => '不正な値を入力しないでください',
        'PDOException' => 'データの送受信に失敗しました'
    ];
}
