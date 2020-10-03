@foreach($collections as $collect)
    <div class="popup-main mfp-hide" id="productid{{$collect->id}}">

        <!-- === product popup === -->
        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title">{{$collect->name}} <small>{{$collect->category->name}}</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="{{Voyager::image($collect->photo)}}" alt="" width="640" />
                @php
                    $images = json_decode($collect->photos);
                @endphp
                
                @foreach($images as $image)
                 <img src="{{Voyager::image($image)}}" alt="{{$collect->name}}" width="640" />
                @endforeach
            </div>

            <!-- === product-popup-info === -->

            <div class="popup-content">
                <div class="product-info-wrapper">
                    <div class="row">

                        <!-- === left-column === -->

                        <div class="col-sm-6">
                            @if($collect->brand)
                                <div class="info-box">
                                    <strong>Fabricant</strong>
                                    <span>{{$collect->brand->name}}</span>
                                </div>
                            @endif
                            <div class="info-box">
                                <strong>Materials</strong>
                                <span>Wood, Leather, Acrylic</span>
                            </div>
                            <div class="info-box">
                                    <strong>Disponibilité</strong>
                                @if($collect->inStock)
                                    <span><i class="fa fa-check-square-o"></i> En stock</span>
                                @else
                                    <span class=""><i class="fa fa-trash"></i> En rupture de stock</span>
                                @endif
                            </div>
                        </div>

                        <!-- === right-column === -->

                        {{--<div class="col-sm-6">
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
                        </div>--}}

                    </div><!--/row-->
                </div> <!--/product-info-wrapper-->
            </div><!--/popup-content-->
            <!-- === product-popup-footer === -->

            <div class="popup-table">
                <div class="popup-cell">
                    <div class="price">
                        @if($collect->hasPromo && $collect->oldprix!== null)
                        <span class="h3">{{$collect->oldprix}} MAD
                            <small>{{$collect->prix}} MAD</small>

                        </span>
                        @else
                        <span class="h3">{{$collect->prix}} MAD</span>
                            
                        
                        @endif
                        
                    
                    </div>
                </div>
                <div class="popup-cell">
                    <div class="popup-buttons">
                        <a href="{{route('products.single',$collect->slug)}}"><span class="icon icon-eye"></span> <span class="hidden-xs">voir plus</span></a>
                        <a href="{{route('checkout',$collect->slug)}}"><span class="icon icon-cart"></span> <span class="hidden-xs">Commander</span></a>
                        
                    </div>
                </div>
            </div>

        </div> <!--/product-->
    </div>
@endforeach