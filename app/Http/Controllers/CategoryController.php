<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){

        $products = Product::orderBy('inHome','desc')->get();

        return view('categorie.index',compact('products'));
    }

    public function show($slug){
        
      $cate = Category::whereSlug($slug)->first();
      $products = Product::where('category_id',$cate->id)->get();
      return view('categorie.single.index',compact('products','cate'));
    }
}
