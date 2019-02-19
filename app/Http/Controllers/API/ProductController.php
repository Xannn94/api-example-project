<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repository\ProductRepository;

class ProductController extends Controller
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->getProductList();
        return response()->json($products);
    }

    /**
     * Return list active products
     *
     * @return \Illuminate\Http\Response
    */
    public function getActiveProducts()
    {
        $products = $this->repository->getActiveProducts();
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $productId
     * @return \Illuminate\Http\Response
     */
    public function show(int $productId)
    {
        $product = $this->repository->findById($productId);
        return response()->json($product);
    }
}
