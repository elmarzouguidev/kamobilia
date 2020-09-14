<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
class CheckoutController extends Controller
{
    //
    public function index($slug)
    {

        $product = Product::whereSlug($slug)->firstOrFail();

        if ($product) {

            return view('checkout.index', compact('product'));
        }

        return view('products.single.index', compact('product'));
    }

    public function cashOnDelivery($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();

        if ($product) {
            return view('checkout.cashOnDelivery.index', compact('product'));
        }
        return "Noo";
    }

    public function cashOnDeliveryPost(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'cartnational' => 'required|string',
           // 'email' => 'nullable|email',
            'tele' => 'required|numeric',
           // 'ville' => 'nullable|string',
            'address' => 'required|string',
           // 'message' => 'nullable|string',
            'product' => 'required|alpha_dash|string'

        ]);
        $product = Product::whereSlug($request->product)->firstOrFail();
        $order = new Order();
        $order->nom = $request->nom;
        $order->prenom = $request->prenom;
        $order->cartnational = $request->cartnational;
       // $order->email = $request->email;
        $order->tele = $request->tele;
      //  $order->ville = $request->ville;
        $order->address = $request->address;
       // $order->message = $request->message;
        /**** */
        $order->orderNumber = 'ORDER-' . strtoupper(uniqid());
        $order->productName = $product->name;
        $order->productQte = 1;
        $order->productCategory = $product->category->name;
        $order->productType = $product->personalized;
        $order->status = "pending";
        $order->product_id = $product->id;
        if ($order->save()) {

            Mail::to('abdo@gmail.com')->send(new OrderMail($order,$product));

            return view('orders.cashOnDelivery.ok', compact('product','order'));
        }
        return view('orders.cashOnDelivery.no');
    }


    public function orderConfirmed(){
        return view('orders.cashOnDelivery.ok', compact('product','order'));
    }
}
