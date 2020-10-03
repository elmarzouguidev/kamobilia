<?php

/**
 * Powered by Elmarzougui Abdelghafour
 * HayMacProduction
 */

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUs;
use App\Product;
use App\Slider;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    //

    public function index()
    {

        $sliders = Slider::active();
        $promos  = Product::promos();
        $news    = Product::news();
        $socials = Social::active();

        return view('home.index', compact('sliders', 'promos', 'news', 'socials'));
    }

    public function promos()
    {

        $products  = Product::promos();

        return view('promos.index', compact('products'));
    }

    public function news()
    {

        $products  = Product::news();

        return view('news.index', compact('products'));
    }


    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {

        return view('contact.index');
    }

    public function contactPost(ContactUsRequest $request)
    {

        Mail::to('abdo@gmail.com')->send(new ContactUs($request->only(['nom', 'email', 'subject', 'comment'])));
        return response()->noContent();
    }
    public function terms()
    {

        return view('terms.index');
    }
}
