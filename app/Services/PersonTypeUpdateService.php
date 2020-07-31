<?php

namespace App\Services;

use App\PersonType;
use App\Http\Requests\PersonTypeUpdateRequest;

class PersonTypeUpdateService
{
    public function handle(PersonType $person_type, PersonTypeUpdateRequest $request): PersonType
    {
        $person_type->update($request->all());

        return $person_type;
    }
}
