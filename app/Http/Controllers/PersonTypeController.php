<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonTypeStoreRequest;
use App\Http\Requests\PersonTypeUpdateRequest;
use App\Http\Resources\PersonTypeResource;
use App\PersonType;
use App\Services\PersonTypeIndexService;
use App\Services\PersonTypeStoreService;
use App\Services\PersonTypeUpdateService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  PersonType management
 *
 * APIs for managing PersonType
 */

class PersonTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param PersonTypeIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(PersonTypeIndexService $service): AnonymousResourceCollection
    {
        $this->authorize('viewAny', PersonType::class);

        $person_type = $service->handle();
        return PersonTypeResource::collection($person_type);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PersonTypeStoreRequest $request
     * @param PersonTypeStoreService $service
     * @return PersonTypeResource
     */
    public function store(
            PersonTypeStoreRequest $request,
            PersonTypeStoreService $service
        ): PersonTypeResource
    {
        $this->authorize('create', PersonType::class);

        $person_type = $service->handle($request);
        return new PersonTypeResource(
            $person_type
        );
    }

    /**
     * Display the specified resource.
     *
     * @param PersonType $person_type
     * @return PersonTypeResource
     */
    public function show(PersonType $person_type): PersonTypeResource
    {
        $this->authorize('view', $person_type);

        return new PersonTypeResource(
            $person_type
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PersonTypeUpdateRequest $request
     * @param PersonTypeUpdateService $service
     * @param PersonType $person_type
     * @return PersonTypeResource
     */
    public function update(
            PersonTypeUpdateRequest $request,
            PersonTypeUpdateService $service,
            PersonType $person_type
        ): PersonTypeResource
    {
        $this->authorize('update', $person_type);

        $person_type = $service->handle($person_type, $request);
        return new PersonTypeResource(
            $person_type
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PersonType $person_type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(PersonType $person_type): Response
    {
        $this->authorize('delete', $person_type);

        $person_type->delete();
        return noContent();
    }
}
