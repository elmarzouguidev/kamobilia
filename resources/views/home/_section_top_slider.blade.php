<section class="header-content">

    <div class="owl-slider">
        
       @foreach($sliders as $slider)
            <div class="item" style="background-image:url({{Voyager::image($slider->image)}})">
                <div class="box">
                    <div class="container">
                        <h2 class="title animated h1" data-animation="fadeInDown">
                           {{$slider->title}}
                        </h2>
                        <div class="desc animated" data-animation="fadeInUp">
                            {{$slider->desc}}
                        </div>
                         @if($slider->link)
                            <div class="animated" data-animation="fadeInUp">
                                <a href="{{$slider->link}}" target="_blank" class="btn btn-clean">{{$slider->buttontext}}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

    </div> <!--/owl-slider-->
</section>