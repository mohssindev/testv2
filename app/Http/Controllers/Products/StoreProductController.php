<?php

namespace App\Http\Controllers\Products;

use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Http\Resources\ProductResource;

class StoreProductController extends Controller
{
    /** @var ProductService  */
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function __invoke(ProductFormRequest $request)
    {
        $attributes = $request->validated();
        $attributes['image'] = $request->file('image');
        $product = $this->productService->create($attributes);

        return response()->json(new ProductResource($product));
    }
}
