<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use App\transformers\ProductTransformer;
// use Illuminate\Contracts\Pagination\LengthAwarePaginator;
// use Illuminate\Support\Collection as IlluminateCollection;
//use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class ProductController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var UserTransformer
     */
    private $productTransformer;
    function __construct(Manager $fractal, ProductTransformer $productTransformer)
    {
        $this->fractal = $fractal;
        $this->productTransformer = $productTransformer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::all();
        $product = new Collection($product, $this->productTransformer);
        $product = $this->fractal->createData($product);
        return $product->toArray();

        // $productPage = Product::paginate(4);
        // $productPage = new Collection($productPage->items(), $this->productTransformer);
        // $productPage->setPaginator(new IlluminatePaginatorAdapter($productPage));
        // $productPage = $this->fractal->createData($product);
        // return $productPage->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
