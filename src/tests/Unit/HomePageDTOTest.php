<?php

declare(strict_types=1);

namespace tests\Unit;

use App\Models\HomePageDTO;
use PHPUnit\Framework\TestCase;

class HomePageDTOTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDTOConstructor()
    {
        $dto = new HomePageDTO(message: "test");
        $this->assertEquals(expected: 'test', actual: $dto->message);
    }
}
