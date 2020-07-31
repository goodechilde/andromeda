<?php

namespace App\Services;

use App\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class ProductIndexService
{
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(Product::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
                    ->paginate()
                    ->appends(request()->query());
    }
}
