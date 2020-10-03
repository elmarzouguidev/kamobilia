
<section class="owl-icons-wrapper">

    <header class="hidden">
        <h2>Product categories</h2>
    </header>

    <div class="container">

        <div class="owl-icons">
            
            @foreach($categories as $cate)

                <a href="{{route('categories.single',$cate->slug)}}">

                    <figure>
                        
                        {{--<img src="assets/images/gallery-4.jpg">--}} 
                        <i class="f-icon {{ $cate->icon_code ?? 'f-icon-armchair'}}"></i>
                        <figcaption>{{$cate->name}}</figcaption>

                    </figure>
                </a>

            @endforeach

        </div> <!--/owl-icons-->
    </div> <!--/container-->
</section>