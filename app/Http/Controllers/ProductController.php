<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new product();
       return view('products.create', compact(
           'item'
       ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #--- this code will not save the data but it will
        #--- return the article in the $product object
        $product = product::firstOrNew(
            [ 'title' => $request->title ],
            [ 'description' => $request->description ]
        );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $item = Product::findOrFail($product->id);
        return view('products.edit', compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $product = product::updateOrCreate(
            [ 'title' => $request->title ],
            [ 'description' => $request->description ]
        );

        return redirect()->back();
    }


}
