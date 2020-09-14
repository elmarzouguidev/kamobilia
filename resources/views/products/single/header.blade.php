        <!-- ========================  Main header ======================== -->

        <section class="main-header" style="background-image:url({{asset('assets/images/gallery-2.jpg')}})">
            <header>
                <div class="container">
                    <h1 class="h2 title">{{$product->name}} </h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="{{route('home')}}"><span class="icon icon-home"></span></a></li>
                        <li><a href="{{route('categories')}}">categories</a></li>
                        <li><a href="{{route('categories.single',$product->category->slug)}}">{{$product->category->name}}</a></li>
                        <li><a class="active" href="{{route('products.single',$product->name)}}">{{$product->name}}</a></li>
                    </ol>
                </div>
            </header>
        </section>