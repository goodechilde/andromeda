<?php

namespace App\Services;

use App\Product;
use App\Http\Requests\ProductStoreRequest;

class ProductStoreService
{
    public function handle(ProductStoreRequest $request): Product
    {
        return Product::create($request->all());
    }
}
