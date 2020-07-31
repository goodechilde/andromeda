<?php

namespace App\Services;

use App\Person;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

class PersonIndexService
{
    public function handle(): LengthAwarePaginator
    {
        return QueryBuilder::for(Person::class)
                    ->allowedFilters([])
                    ->allowedSorts([])
                    ->allowedIncludes([])
                    ->paginate()
                    ->appends(request()->query());
    }
}
