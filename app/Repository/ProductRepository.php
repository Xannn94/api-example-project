<?php

namespace App\Repository;

use App\Product;

class ProductRepository
{
    /**
     * @var Product $builder
     */
    private $builder;

    public function __construct()
    {
        $this->builder = Product::query();
    }

    /**
     * Return collection products
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getProductList()
    {
        return $this->builder->get();
    }

    /**
     * Return collection from only active products
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getActiveProducts()
    {
        return $this->builder->active()->get();
    }

    /**
     * Find product by Id
     *
     * @param int $id
     * @return Product|null
    */
    public function findById(int $id) : ?Product
    {
        return $this->builder->find($id);
    }
}