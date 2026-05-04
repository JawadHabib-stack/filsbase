<?php

namespace Modules\Product\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::published()->recentlyPublished()->paginate(10);
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::published()->where('id', $id)->orWhere('slug', $id)->firstOrFail();
        return response()->json($product);
    }
}
