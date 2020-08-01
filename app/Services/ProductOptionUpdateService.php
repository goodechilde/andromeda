<?php

namespace App\Services;

use App\ProductOption;
use App\Http\Requests\ProductOptionUpdateRequest;

class ProductOptionUpdateService
{
    public function handle(ProductOption $product_option, ProductOptionUpdateRequest $request): ProductOption
    {
        $product_option->update($request->all());

        return $product_option;
    }
}
