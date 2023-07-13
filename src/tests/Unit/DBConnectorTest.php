<?php

namespace tests\Unit;

use App\Core\DBConnector;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DBConnectorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $pdo = DBConnector::connect();
    }
}
