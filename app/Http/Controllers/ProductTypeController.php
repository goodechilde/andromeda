<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeStoreRequest;
use App\Http\Requests\ProductTypeUpdateRequest;
use App\Http\Resources\ProductTypeResource;
use App\ProductType;
use App\Services\ProductTypeIndexService;
use App\Services\ProductTypeStoreService;
use App\Services\ProductTypeUpdateService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  ProductType management
 *
 * APIs for managing ProductType
 */

class ProductTypeController extends Controller
{
    /**
     * Sets authorization for all resources on this class
     * uncomment authorizationResource to enable the Policy
     *
     */
    public function __construct()
    {
//        $this->authorizeResource(ProductType::class);
    }

    /**
     * Display a listing of the dummyModel resource.
     * @queryParam sort Field to sort by. Defaults to 'id'.
     * @queryParam fields[dummyModel] Comma-separated fields to include in the response
     * @queryParam filters[INSERTFILTER] Filter by INSERTFILTER.
     * @queryParam include Include related information, accepted values .
     *
     * @param ProductTypeIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(ProductTypeIndexService $service): AnonymousResourceCollection
    {
        $product_type = $service->handle();
        return ProductTypeResource::collection($product_type);
    }


    /**
     * Store a newly created dummyModel resource in storage.
     *
     * @param ProductTypeStoreRequest $request
     * @param ProductTypeStoreService $service
     * @return ProductTypeResource
     */
    public function store(
        ProductTypeStoreRequest $request,
        ProductTypeStoreService $service
    ): ProductTypeResource {
        $product_type = $service->handle($request);
        return new ProductTypeResource(
            $product_type
        );
    }

    /**
     * Display the specified dummyModel resource.
     *
     * @param ProductType $product_type
     * @return ProductTypeResource
     */
    public function show(ProductType $product_type): ProductTypeResource
    {
        return new ProductTypeResource(
            $product_type
        );
    }

    /**
     * Update the specified dummyModel resource in storage.
     *
     * @param ProductTypeUpdateRequest $request
     * @param ProductTypeUpdateService $service
     * @param ProductType $product_type
     * @return ProductTypeResource
     */
    public function update(
        ProductTypeUpdateRequest $request,
        ProductTypeUpdateService $service,
        ProductType $product_type
    ): ProductTypeResource {
        $product_type = $service->handle($product_type, $request);
        return new ProductTypeResource(
            $product_type
        );
    }

    /**
     * Remove the specified dummyModel resource from storage.
     *
     * @param ProductType $product_type
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy(ProductType $product_type): Response
    {
        $product_type->delete();
        return noContent();
    }
}
