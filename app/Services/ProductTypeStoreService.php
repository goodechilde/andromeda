<?php

namespace App\Services;

use App\ProductType;
use App\Http\Requests\ProductTypeStoreRequest;

class ProductTypeStoreService
{
    public function handle(ProductTypeStoreRequest $request): ProductType
    {
        return ProductType::create($request->all());
    }
}
