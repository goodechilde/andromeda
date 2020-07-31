<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Product;
use App\Services\ProductIndexService;
use App\Services\ProductStoreService;
use App\Services\ProductUpdateService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  Product management
 *
 * APIs for managing Product
 */

class ProductController extends Controller
{
    /**
     * Sets authorization for all resources on this class
     * uncomment authorizationResource to enable the Policy
     *
     */
    public function __construct()
    {
//        $this->authorizeResource(Product::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param ProductIndexService $service
     * @return AnonymousResourceCollection
     */
    public function index(ProductIndexService $service): AnonymousResourceCollection
    {
        $product = $service->handle();
        return ProductResource::collection($product);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ProductStoreRequest $request
     * @param ProductStoreService $service
     * @return ProductResource
     */
    public function store(
            ProductStoreRequest $request,
            ProductStoreService $service
        ): ProductResource
    {
        $product = $service->handle($request);
        return new ProductResource(
            $product
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return ProductResource
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource(
            $product
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @param ProductUpdateService $service
     * @param Product $product
     * @return ProductResource
     */
    public function update(
            ProductUpdateRequest $request,
            ProductUpdateService $service,
            Product $product
        ): ProductResource
    {
        $product = $service->handle($product, $request);
        return new ProductResource(
            $product
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $product): Response
    {
        $product->delete();
        return noContent();
    }
}
