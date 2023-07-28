<?php

declare(strict_types=1);

namespace tests\Unit;

use App\Service\SupplyArticle;
use tests\TestCase;

class SupplyArticleTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetArticleTest()
    {
        $articles = SupplyArticle::articleData();
        foreach ($articles as $article){
            $this->assertSame(expected: "App\Models\Article", actual: get_class($article));
        }
    }
}
