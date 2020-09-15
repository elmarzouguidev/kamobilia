<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Mail\OrderMailAdmin;
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

    public function checkoutPerso(Request $request){

        $request->validate([

            'nom' => 'required|string',
            'prenom' => 'required|string',
            // 'cartnational' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048',
            'email' => 'required|email',
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
        //$order->cartnational = $request->cartnational;
        $order->email = $request->email;
        $order->tele = $request->tele;
        //  $order->ville = $request->ville;
        $order->address = $request->address;
        // $order->message = $request->message;
        /**************************************************** */
        $order->paymentMethode = "cashOnDelivery";
        $order->orderNumber = 'ORDER-' . strtoupper(uniqid());
        $order->productName = $product->name;
        $order->productQte = 1;
        $order->productCategory = $product->category->name;
        $order->productType = $product->personalized;
        $order->status = "pending";
        $order->product_id = $product->id;

        if ($order->save()) {

            // $path = $request->file('cartnational')->store('CNIEFile');
            //dd($path);
            Mail::to('abdo@gmail.com')->send(new OrderMailAdmin($order, $product));

            Mail::to($request->email)->send(new OrderMail($order, $product));

            return view('orders.checkoutPerso.ok', compact('product', 'order'));
        }

        return view('orders.cashOnDelivery.no');
    }

    public function cashOnDelivery($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();

        if ($product) {

            return view('checkout.cashOnDelivery.index', compact('product'));
            
        }

        return redirect()->route('home');
    }

    public function cashOnDeliveryPost(Request $request)
    {
        //dd($request->all());

        $request->validate([

            'nom' => 'required|string',
            'prenom' => 'required|string',
            // 'cartnational' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048',
            'email' => 'required|email',
            'tele' => 'required|numeric',
            // 'ville' => 'nullable|string',
            'address' => 'required|string',
            // 'message' => 'nullable|string',
            'product' => 'required|alpha_dash|string',
            'totalPriceer'=>'nullable|numeric'

        ]);
        $product = Product::whereSlug($request->product)->firstOrFail();
        $order = new Order();
        $order->nom = $request->nom;
        $order->prenom = $request->prenom;
        //$order->cartnational = $request->cartnational;
        $order->email = $request->email;
        $order->tele = $request->tele;
        //  $order->ville = $request->ville;
        $order->address = $request->address;
        // $order->message = $request->message;
        /**************************************************** */
        $order->paymentMethode = "cashOnDelivery";
        $order->orderNumber = 'ORDER-' . strtoupper(uniqid());
        $order->productName = $product->name;
        $order->productQte = 1;
        $order->totalPrice = $request->totalPriceer;
        $order->productCategory = $product->category->name;
        $order->productType = $product->personalized;
        $order->status = "pending";
        $order->product_id = $product->id;

        if ($order->save()) {

            // $path = $request->file('cartnational')->store('CNIEFile');
            //dd($path);
            Mail::to('abdo@gmail.com')->send(new OrderMailAdmin($order, $product));
            Mail::to($request->email)->send(new OrderMail($order, $product));

            return view('orders.cashOnDelivery.ok', compact('product', 'order'));
        }

        return view('orders.cashOnDelivery.no');
    }


    public function orderConfirmed()
    {
        return view('orders.cashOnDelivery.ok', compact('product', 'order'));
    }




    public function creditBanque($slug)
    {
        // dd("yeee");
        $product = Product::whereSlug($slug)->firstOrFail();

        if ($product) {
            return view('checkout.creditBanque.index', compact('product'));
        }

        return redirect()->route('home');
    }

    public function creditBanquePost(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'nom' => 'required|string',
            'prenom' => 'required|string',
            'cartnational' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048',
            'email' => 'required|email',
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
       // $order->cartnational = $request->cartnational;
        $order->email = $request->email;
        $order->tele = $request->tele;
        //  $order->ville = $request->ville;
        $order->address = $request->address;
        // $order->message = $request->message;
        /**************************************************** */
        $order->paymentMethode = "creditBanque";
        $order->orderNumber = 'ORDER-' . strtoupper(uniqid());
        $order->productName = $product->name;
        $order->productQte = 1;
        $order->productCategory = $product->category->name;
        $order->productType = $product->personalized;
        $order->status = "pending";
        $order->product_id = $product->id;

        if ($order->save()) {

            $path = $request->file('cartnational')->store('CNIEFile');
            //dd($path);
            Mail::to('abdo@gmail.com')->send(new OrderMailAdmin($order, $product, $path));
            Mail::to($request->email)->send(new OrderMail($order, $product));

            return view('orders.cashOnDelivery.ok', compact('product', 'order'));
        }

        return view('orders.cashOnDelivery.no');
    }

    public function creditDirect($slug)
    {
        // dd("yeee");
        $product = Product::whereSlug($slug)->firstOrFail();

        if ($product) {

            return view('checkout.creditDirect.index', compact('product'));
        }

        return redirect()->route('home');
    }

    public function creditDirectPost(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'nom' => 'required|string',
            'prenom' => 'required|string',
            'cartnational' => 'required|file|mimes:pdf,docx,jpeg,png,jpg|max:2048',
            'email' => 'required|email',
            //'tele' => 'required|numeric',
            // 'ville' => 'nullable|string',
            //'address' => 'required|string',
            'message' => 'required|string',
            'product' => 'required|alpha_dash|string'

        ]);
        $product = Product::whereSlug($request->product)->firstOrFail();
        $order = new Order();
        $order->nom = $request->nom;
        $order->prenom = $request->prenom;
        //$order->cartnational = $request->cartnational;
        $order->email = $request->email;
       // $order->tele = $request->tele;
        //  $order->ville = $request->ville;
        //$order->address = $request->address;
        $order->message = $request->message;
        /**************************************************** */
        $order->paymentMethode = "Paiement a credit par cheque directe a la societe";
       
        $order->orderNumber = 'ORDER-' . strtoupper(uniqid());
        $order->productName = $product->name;
        $order->productQte = 1;
        $order->productCategory = $product->category->name;
        $order->productType = $product->personalized;
        $order->status = "pending";
        $order->product_id = $product->id;

        if ($order->save()) {

            $path = $request->file('cartnational')->store('CNIEFile');
            //dd($path);
            Mail::to('abdo@gmail.com')->send(new OrderMailAdmin($order, $product, $path));
            Mail::to($request->email)->send(new OrderMail($order, $product));

            return view('orders.cashOnDelivery.ok', compact('product', 'order'));
        }

        return view('orders.cashOnDelivery.no');
    }
}
