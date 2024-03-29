<?php

namespace App\Http\Controllers;

use App\Http\Requests\AviRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function show($slug)
    {

        $product = Product::whereSlug($slug)->firstOrFail();

        $collections = Product::where('category_id', $product->category_id)
            ->whereNotIn('id', [$product->id])
            ->get();

        return  view('products.single.index', compact('product', 'collections'));
    }


    public function avis(AviRequest $request, $slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        if ($product) {
            $product->avis()->create([
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment
            ]);
            return response()->noContent();
        }
        return redirect()->route('products.single', $slug);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
