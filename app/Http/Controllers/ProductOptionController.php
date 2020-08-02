<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductOptionStoreRequest;
use App\Http\Requests\ProductOptionUpdateRequest;
use App\Http\Resources\ProductOptionResource;
use App\ProductOption;
use App\Services\ProductOptionIndexService;
use App\Services\ProductOptionStoreService;
use App\Services\ProductOptionUpdateService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  ProductOption management
 *
 * APIs for managing ProductOption
 */

class ProductOptionController extends Controller
{
    /**
     * Sets authorization for all resources on this class
     * uncomment authorizationResource to enable the Policy
     *
     */
    public function __construct()
    {
//        $this->authorizeResource(ProductOption::class);
    }

    /**
     * Display a listing of the dummyModel resource.
     * @queryParam sort Field to sort by. Defaults to 'id'.
     * @queryParam fields[dummyModel] Comma-separated fields to include in the response
     * @queryParam filters[INSERTFILTER] Filter by INSERTFILTER.
     * @queryParam include Include related information, accepted values .
     *
     * @param ProductOptionIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(ProductOptionIndexService $service): AnonymousResourceCollection
    {
        $product_option = $service->handle();
        return ProductOptionResource::collection($product_option);
    }


    /**
     * Store a newly created dummyModel resource in storage.
     *
     * @param ProductOptionStoreRequest $request
     * @param ProductOptionStoreService $service
     * @return ProductOptionResource
     */
    public function store(
        ProductOptionStoreRequest $request,
        ProductOptionStoreService $service
    ): ProductOptionResource {
        $product_option = $service->handle($request);
        return new ProductOptionResource(
            $product_option
        );
    }

    /**
     * Display the specified dummyModel resource.
     *
     * @param ProductOption $product_option
     * @return ProductOptionResource
     */
    public function show(ProductOption $product_option): ProductOptionResource
    {
        return new ProductOptionResource(
            $product_option
        );
    }

    /**
     * Update the specified dummyModel resource in storage.
     *
     * @param ProductOptionUpdateRequest $request
     * @param ProductOptionUpdateService $service
     * @param ProductOption $product_option
     * @return ProductOptionResource
     */
    public function update(
        ProductOptionUpdateRequest $request,
        ProductOptionUpdateService $service,
        ProductOption $product_option
    ): ProductOptionResource {
        $product_option = $service->handle($product_option, $request);
        return new ProductOptionResource(
            $product_option
        );
    }

    /**
     * Remove the specified dummyModel resource from storage.
     *
     * @param ProductOption $product_option
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy(ProductOption $product_option): Response
    {
        $product_option->delete();
        return noContent();
    }
}
