<?php

namespace App\Services;

use App\Person;
use App\Http\Requests\PersonUpdateRequest;

class PersonUpdateService
{
    public function handle(Person $person, PersonUpdateRequest $request): Person
    {
        $person->update($request->all());

        return $person;
    }
}
