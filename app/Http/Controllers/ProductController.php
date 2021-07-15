<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Product;
use Endroid\QrCode\Builder\Builder as QR;
use Endroid\QrCode\Writer\PngWriter;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function incategory($categoryslug)
    {
        $category = Category::where('slug', '=', $categoryslug)->first();
        return Product::where('category_id','=', $category->id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'slug' =>  'required',
            'description' =>  'required',
            'images' =>  'required',
            'category_id'  =>  'required',
        ]);
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $product = Product::with(['recipes', 'reviews', 'questions'])->where('slug', $slug)->first();
        $product->recommendedItems = Product::where('category_id','=',  $product->category_id)
            ->where('id', '<>', $product->id)->limit(6)->get();
        $product->avgRating = $product->reviews()->avg('rating');
        return $product;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $product = Product::findOrFail($id);
       $product->update( $request->all());
       return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
    }
    /**
     * Search for the name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->get();

    }
}
