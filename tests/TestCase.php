<?php

namespace Tests;

use App\Product;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    const PRODUCT_COUNT = 10;

    protected function createProducts(int $count)
    {
        return factory(Product::class, $count)->create();
    }
}
