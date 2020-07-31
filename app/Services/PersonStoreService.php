<?php

namespace App\Services;

use App\Person;
use App\Http\Requests\PersonStoreRequest;

class PersonStoreService
{
    public function handle(PersonStoreRequest $request): Person
    {
        return Person::create($request->all());
    }
}
