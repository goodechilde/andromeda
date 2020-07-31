<?php

namespace App\Services;

use App\PersonType;
use App\Http\Requests\PersonTypeStoreRequest;

class PersonTypeStoreService
{
    public function handle(PersonTypeStoreRequest $request): PersonType
    {
        return PersonType::create($request->all());
    }
}
