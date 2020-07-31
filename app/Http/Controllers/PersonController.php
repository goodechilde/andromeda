<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Http\Requests\PersonUpdateRequest;
use App\Http\Resources\PersonResource;
use App\Person;
use App\Services\PersonIndexService;
use App\Services\PersonStoreService;
use App\Services\PersonUpdateService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  Person management
 *
 * APIs for managing Person
 */

class PersonController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Person::class);
    }

    /**
     * Display a listing of the person resource.
     * @queryParam sort Field to sort by. Defaults to 'id'.
     * @queryParam fields[person] Comma-separated fields to include in the response
     * @queryParam filters[first_name] Filter by first name.
     * @queryParam filters[last_name] Filter by last name.
     * @queryParam include Include related information, accepted values 'addresses','emailaddresses','phones','socialmediaaddresses','notes','tags'.
     *
     * @param PersonIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(PersonIndexService $service): AnonymousResourceCollection
    {
        $person = $service->handle();
        return PersonResource::collection($person);
    }


    /**
     * Store a newly created person resource in storage.
     *
     * @param PersonStoreRequest $request
     * @param PersonStoreService $service
     * @return PersonResource
     */
    public function store(
        PersonStoreRequest $request,
        PersonStoreService $service
    ): PersonResource
    {
        $person = $service->handle($request);
        return new PersonResource(
            $person
        );
    }

    /**
     * Display the specified person resource.
     *
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource(
            $person
        );
    }

    /**
     * Update the specified person resource in storage.
     *
     * @param PersonUpdateRequest $request
     * @param PersonUpdateService $service
     * @param Person $person
     * @return PersonResource
     */
    public function update(
        PersonUpdateRequest $request,
        PersonUpdateService $service,
        Person $person
    ): PersonResource
    {
        $person = $service->handle($person, $request);
        return new PersonResource(
            $person
        );
    }

    /**
     * Remove the specified person resource from storage.
     *
     * @param Person $person
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy(Person $person): Response
    {
        $person->delete();
        return noContent();
    }
}
