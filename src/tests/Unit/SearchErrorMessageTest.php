<?php

namespace tests\Unit;

use App\Service\SearchErrorMessage;
use PHPUnit\Framework\TestCase;

class SearchErrorMessageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCaseInvalidArgumentException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["InvalidArgumentException"];
        $this->assertSame(expected: '不正な値を入力しないでください', actual: $errorMessage);
    }

    /**
     * @return void
     */
    public function testCasePDOException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["PDOException"];
        $this->assertSame(expected: 'データの送受信に失敗しました', actual: $errorMessage);
    }


    /**
     * @return void
     */
    public function testCaseInvalidFileException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["InvalidFileException"];
        $this->assertSame(expected: '読み込みに失敗しました', actual: $errorMessage);
    }
}
