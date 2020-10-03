<section class="main-header" style="background-image:url({{Voyager::image(setting('checkout.checkout_image'))}})">
    <header>
        <div class="container text-center">
            <h2 class="h2 title">{{$product->name}}</h2>
            <ol class="breadcrumb breadcrumb-inverted">
                <li><a href="{{route('home')}}"><span class="icon icon-home"></span></a></li>
                <li><a href="{{route('categories')}}">catégories</a></li>
                <li><a class="active" href="{{route('categories.single',$product->category->slug)}}">{{$product->category->name}}</a></li>
                <li><a href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></li>
                <li><a href="">{{request()->segment(3)}}</a></li>
            </ol>
        </div>
    </header>
</section>