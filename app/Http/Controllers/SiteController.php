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
use TCG\Voyager\Models\Page;

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
        $page = Page::whereSlug('a-propos-de-nous')->whereStatus('active')->firstOrFail();
        return view('about.index', compact('page'));
    }

    public function contact()
    {

        return view('contact.index');
    }

    public function contactPost(ContactUsRequest $request)
    {

        Mail::to('abdo@gmail.com')->send(new ContactUs($request->only(['nom', 'email', 'subject', 'comment'])));
        //dd($ok);
        return response()->noContent();
    }
    public function terms()
    {
        $page = Page::whereSlug('condition-d-utilisation')->whereStatus('active')->firstOrFail();
        return view('terms.index', compact('page'));
    }
}
