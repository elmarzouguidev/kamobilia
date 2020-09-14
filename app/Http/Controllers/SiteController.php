<?php
/**
 * Powered by Elmarzougui Abdelghafour
 * HayMacProduction
 */
namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
   
    public function index(){

        $sliders = Slider::active();
        $promos  = Product::promos();
        $news    = Product::news();

        return view('home.index',compact('sliders','promos','news'));
    }

    public function promos(){

        $promos  = Product::promos();

        return view('promos.index',compact('promos'));
    }

    public function news(){

        $news  = Product::news();

        return view('news.index',compact('news'));
    }


    public function about()
    {
        return view('about.index'); 
    }
    
    public function contact(){

        return view('contact.index');
    }

    public function terms(){
        
        return view('terms.index');

    }
}
