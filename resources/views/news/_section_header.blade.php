        <!-- ======================== Main header ======================== -->

        <section class="main-header" style="background-image:url({{Voyager::image(setting('nouveaute.news_image'))}})">
            <header>
                <div class="container">
                    <h1 class="h2 title">{{setting('nouveaute.news')}}</h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="{{route('home')}}"><span class="icon icon-home"></span></a></li>
                        <li><a  href="{{route('categories')}}">catégories</a></li>
                        
                    </ol>
                </div>
            </header>
        </section>