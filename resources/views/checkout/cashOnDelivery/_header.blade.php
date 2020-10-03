<section class="main-header" style="background-image:url({{Voyager::image(setting('checkout.checkout_image'))}})">
    <header>
        <div class="container text-center">
            <h2 class="h2 title">Checkout</h2>
            <ol class="breadcrumb breadcrumb-inverted">
            <li><a href="{{route('home')}}"><span class="icon icon-home"></span></a></li>
                <li><a href="{{route('categories')}}">catégories</a></li>
                <li><a class="active" href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></li>
                <li><a href="{{route('checkout',$product->slug)}}">checkout</a></li>
                <li><a href="">{{setting('checkout.cache_on_delivery')}}</a></li>
            </ol>
        </div>
    </header>
</section>