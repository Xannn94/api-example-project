<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index action
     *
     * @return void
     */
    public function testIndexActionTest()
    {
        $this->createProducts(self::PRODUCT_COUNT);

        $response = $this->get('api/products');

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(self::PRODUCT_COUNT);
        $response->assertJsonStructure([
            '0' => [
                "id",
                "title",
                "vendor_code",
                "price",
                "quantity",
                "active",
                "created_at",
                "updated_at",
            ]
        ]);
    }

    /**
     * Test index action
     *
     * @return void
     */
    public function testIndexActionIfProductEmptyTest()
    {

        $response = $this->get('api/products');

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(0);
    }

    /**
     * Test show action
     *
     * @return void
     */
    public function testShowActionTest()
    {
        $id = $this->createProducts(1)->first()->id;

        $response = $this->get('api/products/' . $id);

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonStructure([
            "id",
            "title",
            "vendor_code",
            "price",
            "quantity",
            "active",
            "created_at",
            "updated_at"
        ]);
    }
}
