<?php

namespace App\Services;

use App\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class ProductIndexService
{
    /**
     * @psalm-suppress PossiblyInvalidMethodCall
     */
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(Product::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
            ->paginate(request()->query('per_page') ? : (int) 20)
                    ->appends(request()->query() ? : '');
    }
}
