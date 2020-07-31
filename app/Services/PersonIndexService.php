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
                    ->allowedFilters(['id','first_name','last_name'])
                    ->allowedSorts(['id','first_name','last_name'])
                    ->allowedIncludes(['addresses','emailaddresses','phones','socialmediaaddresses','notes','tags'])
                    ->paginate()
                    ->appends(request()->query());
    }
}
