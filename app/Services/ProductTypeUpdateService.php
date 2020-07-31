<?php

namespace App\Services;

use App\ProductType;
use App\Http\Requests\ProductTypeUpdateRequest;

class ProductTypeUpdateService
{
    public function handle(ProductType $product_type, ProductTypeUpdateRequest $request): ProductType
    {
        $product_type->update($request->all());

        return $product_type;
    }
}
