<?php

namespace App\Services;

use App\ProductOption;
use App\Http\Requests\ProductOptionStoreRequest;

class ProductOptionStoreService
{
    public function handle(ProductOptionStoreRequest $request): ProductOption
    {
        return ProductOption::create($request->all());
    }
}
