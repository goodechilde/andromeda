<?php

namespace App\Services;

use App\Product;
use App\Http\Requests\ProductUpdateRequest;

class ProductUpdateService
{
    public function handle(Product $product, ProductUpdateRequest $request): Product
    {
        $product->update($request->all());

        return $product;
    }
}
