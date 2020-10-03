<section class="stretcher-wrapper">

    <!-- === stretcher header === -->

    <header class="">
        <!--remove class 'hidden'' to show section header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h1 class="h2 title">{{setting('acceuil.home_categorie')}}</h1>
                    <div class="text">
                        <p>
                            {{setting('acceuil.home_categorie_exc')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- === stretcher === -->

    <ul class="stretcher">
     @foreach ($categories as $categorie)
        <li class="stretcher-item" style="background-image:url({{Voyager::image($categorie->image)}});">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="f-icon {{$categorie->icon_code ??'f-icon-bathroom'}}"></span>
                    <span class="text-intro">{{$categorie->name}}</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>{{$categorie->name}}</h4>
                <figcaption>{{$categorie->desc}}</figcaption>
            </figure>
            <!--anchor-->
            <a href="{{route('categories.single',$categorie->slug)}}">voir plus </a>
        </li>
     @endforeach


        <!-- === stretcher item more=== -->

        <li class="stretcher-item more">
            <div class="more-icon">
                <span data-title-show="tous les catégories" data-title-hide="+"></span>
            </div>
            <a href="{{route('categories')}}"></a>
        </li>

    </ul>
</section>