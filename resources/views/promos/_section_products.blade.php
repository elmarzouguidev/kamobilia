<section class="products">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">Product category grid</h3>
        </header>

        <div class="row">

            <!-- === product-filters === -->

            <div class="col-md-3 col-xs-12">

                <div id="filters" class="filters">
                    <!--Price-->
                    <div class="filter-box active">
                        <div class="title">Price</div>
                        <div class="filter-content">
                            <div class="price-filter">
                                <input type="text" id="range-price-slider" value="" name="range" />
                            </div>
                        </div>
                    </div>
                    <!--Discount-->
                    
                    <div class="filter-box active">
                        <div class="title">
                            catégories
                        </div>
                        <div class="filter-content">
                            <span class="checkbox">
                                <input type="radio" name="group-type" id="category-all" value="" checked="checked">
                                <label for="category-all">Tous <i>({{$promos->count()}})</i></label>
                            </span>
                            @foreach($categories as $cat)
                                <span class="checkbox">
                                    <input type="radio" name="group-type" id="{{$cat->slug}}" value=".{{$cat->slug}}">
                                    <label for="{{$cat->slug}}">{{$cat->name}} <i>({{$cat->count()}})</i></label>
                                </span>
                            @endforeach

                        </div>
                    </div>
                    

                </div> <!--/filters-->
            </div>

            <!--product items-->

            <div class="col-md-9 col-xs-12">

                <div class="sort-bar clearfix">
                    <div class="sort-results pull-left">
                        <!--Showing result per page-->
                        <select>
                            <option value="1">10</option>
                            <option value="2">50</option>
                            <option value="3">100</option>
                            <option value="4">All</option>
                        </select>
                        <!--Items counter-->
                        <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                    </div>
                    <!--Sort options-->
                    <div class="sort-options pull-right">
                        <span class="hidden-xs">Sort by</span>
                        <select id="sort-price">
                            <option data-option-value="asc">Price: lowest</option>
                            <option data-option-value="desc">Price: highest</option>
                        </select>
                        <!--Grid-list view-->
                        <span class="grid-list">
                            <a href=""><i class="fa fa-th-large"></i></a>
                            <a href=""><i class="fa fa-align-justify"></i></a>
                            <a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
                        </span>
                    </div>
                </div>

                <div id="products" class="row">

                    <!-- === product-item === -->
                    @foreach($promos as $product)
                        <div class="col-md-6 col-xs-6 item price-discount {{$product->category->slug}} ">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <a href="{{route('checkout',$product->slug)}}" class="btn btn-add">
                                    
                                    <i class="icon icon-cart">
                                        
                                    </i>
                                </a>
                                <div class="figure-grid">
                                    @if($product->inHome)
                                        <span class="label label-warning">Nouveau</span>
                                    @endif
                                    <div class="image">
                                        <a href="#productid1" class="mfp-open">
                                            <img src="{{Voyager::image($product->photo)}}" alt="{{$product->name}}" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></h2>
                                        <sup class="price">{{$product->prix}} MAD</sup>
                                        <span class="description clearfix">
                                            {{$product->excerpt}}
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div><!--/row-->

            </div> <!--/product items-->

        </div><!--/row-->
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

                        </div><!--/row-->
                    </div> <!--/product-info-wrapper-->
                </div><!--/popup-content-->
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
    </div><!--/container-->
</section>