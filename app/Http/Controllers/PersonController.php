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
    /**
     * Display a listing of the resource.
     *
     * @param PersonIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(PersonIndexService $service): AnonymousResourceCollection
    {
        $this->authorize('viewAny', Person::class);

        $person = $service->handle();
        return PersonResource::collection($person);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PersonStoreRequest $request
     * @param PersonStoreService $service
     * @return PersonResource
     */
    public function store(
        PersonStoreRequest $request,
        PersonStoreService $service
    ): PersonResource {
        $this->authorize('create', Person::class);

        $person = $service->handle($request);
        return new PersonResource(
            $person
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        $this->authorize('view', $person);

        return new PersonResource(
            $person
        );
    }

    /**
     * Update the specified resource in storage.
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
    ): PersonResource {
        $this->authorize('update', $person);

        $person = $service->handle($person, $request);
        return new PersonResource(
            $person
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Person $person
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy(Person $person): Response
    {
        $this->authorize('delete', $person);

        $person->delete();
        return noContent();
    }
}
