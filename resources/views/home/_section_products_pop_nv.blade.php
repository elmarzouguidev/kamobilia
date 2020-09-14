<section class="products">

    <div class="container">

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title">{{setting('acceuil.home_new')}}</h2>
                    <div class="text">
                        <p>
                            {{setting('acceuil.home_new_ex')}}
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

          @foreach($news as $new)
            <div class="col-md-4 col-xs-6">

                <article>
                    <div class="info">
                        <span class="add-favorite added">
                            <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                        </span>
                        <span>
                            <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                        </span>
                    </div>
                    <div class="btn btn-add">
                        <i class="icon icon-cart"></i>
                    </div>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="#productid1" class="mfp-open">
                                <img src="{{Voyager::image($new->photo)}}" alt="{{$new->name}}" width="360" />
                            </a>
                        </div>
                        <div class="text">
                            <h2 class="title h4"><a href="{{route('products.single',$new->slug)}}">{{$new->name}}</a></h2>
                            {{--<sub>$ 1499,-</sub>--}}
                            <sup>{{$new->prix}} MAD</sup>
                            <span class="description clearfix">
                                {{$new->excerpt}}
                            </span>
                        </div>
                    </div>
                </article>
            </div>
          @endforeach

        </div> <!--/row-->
        <!-- === button more === -->

        <div class="wrapper-more">
            <a href="{{route('news')}}" class="btn btn-main">voir plus </a>
        </div>

        <!-- ========================  Product info popup - quick view ======================== -->

        <div class="popup-main mfp-hide" id="productid1">

            <!-- === product popup === -->

            <div class="product">

                <!-- === popup-title === -->

                <div class="popup-title">
                    <div class="h1 title">Laura <small>product category</small></div>
                </div>

                <!-- === product gallery === -->

                <div class="owl-product-gallery">
                    <img src="assets/images/product-1.png" alt="" width="640" />
                    <img src="assets/images/product-2.png" alt="" width="640" />
                    <img src="assets/images/product-3.png" alt="" width="640" />
                    <img src="assets/images/product-4.png" alt="" width="640" />
                </div>

                <!-- === product-popup-info === -->

                <div class="popup-content">
                    <div class="product-info-wrapper">
                        <div class="row">

                            <!-- === left-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Maifacturer</strong>
                                    <span>Brand name</span>
                                </div>
                                <div class="info-box">
                                    <strong>Materials</strong>
                                    <span>Wood, Leather, Acrylic</span>
                                </div>
                                <div class="info-box">
                                    <strong>Availability</strong>
                                    <span><i class="fa fa-check-square-o"></i> in stock</span>
                                </div>
                            </div>

                            <!-- === right-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Available Colors</strong>
                                    <div class="product-colors clearfix">
                                        <span class="color-btn color-btn-red"></span>
                                        <span class="color-btn color-btn-blue checked"></span>
                                        <span class="color-btn color-btn-green"></span>
                                        <span class="color-btn color-btn-gray"></span>
                                        <span class="color-btn color-btn-biege"></span>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <strong>Choose size</strong>
                                    <div class="product-colors clearfix">
                                        <span class="color-btn color-btn-biege">S</span>
                                        <span class="color-btn color-btn-biege checked">M</span>
                                        <span class="color-btn color-btn-biege">XL</span>
                                        <span class="color-btn color-btn-biege">XXL</span>
                                    </div>
                                </div>
                            </div>

                        </div> <!--/row-->
                    </div> <!--/product-info-wrapper-->
                </div> <!--/popup-content-->
                <!-- === product-popup-footer === -->

                <div class="popup-table">
                    <div class="popup-cell">
                        <div class="price">
                            <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                        </div>
                    </div>
                    <div class="popup-cell">
                        <div class="popup-buttons">
                            <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                            <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                        </div>
                    </div>
                </div>

            </div> <!--/product-->
        </div> <!--popup-main-->
    </div> <!--/container-->
</section>