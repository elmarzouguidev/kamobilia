<section class="products">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">Product category</h3>
        </header>

        <div class="row">

            <!-- === product-filters === -->

            <div class="col-md-3 col-xs-12">

                <div id="filters" class="filters">
                    <!--Price-->
                    <div class="filter-box active">
                        <div class="title">Filtre de prix</div>
                        <div class="filter-content">
                            <div class="price-filter">
                                <input type="text" id="range-price-slider" value="" name="range" />
                            </div>
                        </div>
                    </div>
                    <!--Discount-->
                    
                    <div class="filter-box active">
                        <div class="title">
                            Filtre de catégories
                        </div>
                        <div class="filter-content">
                            <span class="checkbox">
                                <input type="radio" name="group-type" id="category-all" value="" checked="checked">
                                <label for="category-all">Tous <i>({{$products->count()}})</i></label>
                            </span>
                            @foreach($categories as $cat)
                                <span class="checkbox">
                                    <input type="radio" name="group-type" id="{{$cat->slug}}" value=".{{$cat->slug}}">
                                    <label for="{{$cat->slug}}">{{$cat->name}} <i>({{$cat->products()->promos()->count()}})</i></label>
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
                        <span>voir tous  <strong>{{$products->count()}}</strong> produits</span>
                    </div>
                    <!---->
                    <div class="sort-options pull-right">
                        <span class="hidden-xs">Sort by</span>
                        <select id="sort-price">
                            <option data-option-value="asc"> Prix: plus bas</option>
                                
                            <option data-option-value="desc">Prix: plus élevé</option>
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
                    @foreach($products as $product)
                        <div class="col-md-6 col-xs-6 item price-discount {{$product->category->slug}} ">
                            <article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" 
                                        data-title="Ajouter aux favoris" 
                                        data-title-added="Ajouté à la liste des favoris">
                                        <i class="icon icon-heart"></i>
                                       </a>
                                    </span>
                                    <span>
                                    <a href="#productid{{$product->id}}" class="mfp-open" data-title="Aperçu rapide"><i class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <a href="{{route('checkout',$product->slug)}}" class="btn btn-add">
                                    
                                    <i class="icon icon-cart">
                                        
                                    </i>
                                </a>
                                <div class="figure-grid">
                                    @if($product->inHome)
                                        {{--<span class="label label-warning">Nouveau</span>--}}
                                    @endif
                                    <div class="image">
                                        <a href="{{route('products.single',$product->slug)}}" class="mfp-open">
                                            <img  src="{{Voyager::image($product->photo)}}" alt="{{$product->name}}" width="360" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4"><a href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></h2>
                                        @if($product->hasPromo && $product->oldprix!==null)
                                         <sub class="price">{{$product->prix}} MAD</sub>
                                        @else
                                         <sup>{{$product->prix}} MAD</sup>
                                        @endif

                                        @if($product->hasPromo && $product->oldprix!== null)
                                         <sup>{{$product->oldprix}} MAD</sup>
                                        @endif
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
      

        @include('products_filters._section_rapideView')
        

    </div><!--/container-->
</section>