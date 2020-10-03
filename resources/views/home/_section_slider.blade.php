<section class="owl-icons-wrapper owl-icons-frontpage">
    <header class="hidden">
        <h2>catégories</h2>
    </header>

    <div class="container">
        <div class="owl-icons">
            @foreach($categories as $category)
                <a href="{{route('categories.single',$category->slug)}}">
                    <figure>
                    <i class="f-icon {{$category->icon_code ?? 'f-icon-sofa'}}"></i>
                        <figcaption>{{$category->name}}</figcaption>
                    </figure>
                </a>
            @endforeach

        </div> 
    </div> 
</section>