<?php

declare(strict_types=1);

namespace tests\Unit;

use App\Models\LoggedUserDTO;
use PHPUnit\Framework\TestCase;

class LoggedUserDTOTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDTOConstructor()
    {
        $dto = new LoggedUserDTO(username: "test");
        $this->assertSame(expected: 'test', actual: $dto->username);
    }
}
