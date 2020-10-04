<section class="history">
    <div class="container">

        <!-- === History header === -->

        {{--<header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h1 class="h2 title">A bit of history</h1>
                    <div class="text">
                        <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                    </div>
                </div>
            </div>
        </header>--}}

        <!-- === row item === -->

        <div class="row row-block">
            <div class="col-md-5 history-image" style="background-image:url({{Voyager::image($page->image)}})">
                {{--<div class="history-title">
                    <h2 class="title">1930</h2>
                    <p>The begining</p>
                </div>--}}
            </div>
            <div class="col-md-7 history-desc">
                {{--<div class="h5 title">This is how it's began</div>--}}
                <p>
                   {!! $page->body !!}
                </p>
              
            </div>
        </div>

  
    </div>
</section>