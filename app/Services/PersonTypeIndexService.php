<?php

namespace App\Services;

use App\PersonType;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class PersonTypeIndexService
{
    /**
     * @psalm-suppress PossiblyInvalidMethodCall
     */
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(PersonType::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
                    ->paginate(request()->query('per_page') ? : (int) 20)
                    ->appends(request()->query() ? : '');
    }
}
