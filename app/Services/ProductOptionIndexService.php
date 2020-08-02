<?php

namespace App\Services;

use App\ProductOption;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class ProductOptionIndexService
{
    /**
     * @psalm-suppress PossiblyInvalidMethodCall
     */
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(ProductOption::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
                    ->paginate(request()->query('per_page') ? : (int) 20)
                    ->appends(request()->query() ? : '');
    }
}
