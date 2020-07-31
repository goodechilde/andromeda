<?php

namespace App\Services;

use App\PersonType;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class PersonTypeIndexService
{
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(PersonType::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
                    ->paginate()
                    ->appends(request()->query());
    }
}
