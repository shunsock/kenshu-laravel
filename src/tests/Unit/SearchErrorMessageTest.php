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
    public function test_case_InvalidArgumentException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["InvalidArgumentException"];
        $this->assertEquals(expected: '不正な値を入力しないでください', actual: $errorMessage);
    }

    /**
     * @return void
     */
    public function test_case_PDOException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["PDOException"];
        $this->assertEquals(expected: 'データの送受信に失敗しました', actual: $errorMessage);
    }


    /**
     * @return void
     */
    public function test_case_InvalidFileException()
    {
        $errorMessage = SearchErrorMessage::errorMessages["InvalidFileException"];
        $this->assertEquals(expected: '読み込みに失敗しました', actual: $errorMessage);
    }
}
