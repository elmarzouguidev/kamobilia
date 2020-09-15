<section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
    <header>
        <div class="container text-center">
            <h2 class="h2 title">Checkout</h2>
            <ol class="breadcrumb breadcrumb-inverted">
            <li><a href="{{route('home')}}"><span class="icon icon-home"></span></a></li>
                <li><a href="{{route('categories')}}">categories</a></li>
                <li><a class="active" href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></li>
                <li><a href="{{route('checkout',$product->slug)}}">checkout</a></li>
                <li><a href="{{route('checkout.delivery',$product->slug)}}">{{request()->segment(3)}}</a></li>
            </ol>
        </div>
    </header>
</section>