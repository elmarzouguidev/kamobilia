<section class="instagram">

    <!-- === instagram header === -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="h2 title">Suivez-nous sur les réseaux 
                        {{--<i class="fa fa-instagram fa-2x"></i> Instagram--}}
                    </h2>
                    {{--<div class="text">
                        <p>@InstaFurnitureFactory</p>
                    </div>--}}
                </div>
            </div>
        </div>
    </header>

    <!-- === instagram gallery === -->

    <div class="gallery clearfix">
        @foreach($socials as $social)

           <a class="item" href="{{$social->link ?? ''}}">
                <img loading="lazy"  src="{{Voyager::image($social->image)}}" alt="{{$social->seo_title}}" />
            </a>
      
        @endforeach

    </div> <!--/gallery-->

</section>