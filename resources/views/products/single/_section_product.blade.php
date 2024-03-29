<!-- ========================  Product ======================== -->

<section class="product">
    <div class="main">
        <div class="container">
            <div class="row product-flex">

                <!-- product flex is used only for mobile order -->
                <!-- on mobile 'product-flex-info' goes bellow gallery 'product-flex-gallery' -->

                <div class="col-md-4 col-sm-12 product-flex-info">
                    <div class="clearfix">

                        <!-- === product-title === -->

                        <h1 class="title" >
                            {{$product->name}} 
                            <small>{{$product->category->name}}</small>
                        </h1>

                        <div class="clearfix">

                            <!-- === price wrapper === -->

                            <div class="price">
                            
                                @if($product->hasPromo && $product->oldprix!== null)
                                <span class="h3">{{$product->oldprix}} MAD
                                    <small>{{$product->prix}} MAD</small>
        
                                </span>
                                @else
                                <span class="h3">{{$product->prix}} MAD</span>
                                    
                                
                                @endif
                            </div>
                            <hr />

                            <!-- === info-box === -->
                            @if($product->brand)
                                <div class="info-box">
                                    <span><strong>Fabricant</strong></span>
                                    <span>{{$product->brand->name}}</span>
                                </div>
                            @endif
                        
                           {{--
                            <div class="info-box">
                                <span><strong>Materials</strong></span>
                                <span>Wood, Leather, Acrylic</span>
                            </div>
                            --}}
                      

                            <div class="info-box">
                                <span><strong>Disponibilité</strong></span>
                                @if($product->inStock)
                                  <span><i class="fa fa-check-square-o"></i> En stock</span>
                                @else
                                  <span class=""><i class="fa fa-trash"></i> En rupture de stock</span>
                                @endif
                            </div>

                            <hr />

                           {{-- <div class="info-box info-box-addto added">
                                <span><strong>Favourites</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-heart-o"></i> Add to favorites</i>
                                    <i class="added"><i class="fa fa-heart"></i> Remove from favorites</i>
                                </span>
                            </div>--}}

                           {{-- <div class="info-box info-box-addto">
                                <span><strong>Wishlist</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-eye-slash"></i> Add to Watch list</i>
                                    <i class="added"><i class="fa fa-eye"></i> Remove from Watch list</i>
                                </span>
                            </div>--}}

                            {{--<div class="info-box info-box-addto">
                                <span><strong>Collection</strong></span>
                                <span>
                                    <i class="add"><i class="fa fa-star-o"></i> Add to Collection</i>
                                    <i class="added"><i class="fa fa-star"></i> Remove from Collection</i>
                                </span>
                            </div>--}}


                        </div> <!--/clearfix-->
                    </div> <!--/product-info-wrapper-->
                </div> <!--/col-md-4-->
                <!-- === product item gallery === -->

                <div class="col-md-8 col-sm-12 product-flex-gallery">

                    <a href="{{route('checkout',$product->slug)}}" class="btn btn-buy" data-text="Commander"></a>

                    <div class="owl-product-gallery open-popup-gallery">
                        <a href="{{Voyager::image($product->photo)}}">
                            <img src="{{Voyager::image($product->photo)}}" alt="{{$product->name}}" height="500" />
                        </a>

                        @php
                          $images = json_decode($product->photos);
                        @endphp

                        @foreach($images as $image)
                          <a href="{{Voyager::image($image)}}">
                            <img src="{{Voyager::image($image)}}" alt="{{$product->name}}" height="500" />
                          </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- === product-info === -->

    <div class="info">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#designer" aria-controls="designer" role="tab" data-toggle="tab">
                                <i class="icon icon-cart"></i>
                                <span>Produits dans la même catégorie</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                                <i class="icon icon-sort-alpha-asc"></i>
                                <span>Spécification</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#rating" aria-controls="rating" role="tab" data-toggle="tab">
                                <i class="icon icon-thumbs-up"></i>
                                <span>Avis</span>
                            </a>
                        </li>
                    </ul>

                    <!-- === tab-panes === -->

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="designer">
                            <div class="content">

                                <!-- === designer collection title === -->

                                <h3>Produits</h3>

                                <div class="products">
                                    <div class="row">

                                      @foreach($collections as $collect)
                                        <div class="col-md-6 col-xs-6">
                                            <article>
                                                <div class="figure-grid">
                                                    <div class="image">
                                                    <a href="#productid{{$collect->id}}" class="mfp-open">
                                                            <img src="{{Voyager::image($collect->photo)}}" alt="{{$collect->name}}" width="360" />
                                                    </a>
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title"><a href="{{route('products.single',$collect->slug)}}">{{$collect->name}}</a></h4>
                                                        <sup>{{$collect->category->name}}</sup>
                                                        <span class="description clearfix">{{$collect->excerpt}}</span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                      @endforeach  

                                    </div> <!--/row-->
                                </div> <!--/products-->
                            </div> <!--/content-->
                        </div> <!--/tab-pane-->
                        <!-- ============ tab #2 ============ -->

                        <div role="tabpanel" class="tab-pane" id="design">
                            <div class="content">
                                <div class="row">
                                   {{--
                                    <div class="col-md-4">
                                        <h3>Dimensions</h3>
                                        <p>
                                            <img class="full-image" src="assets/images/specs.png" alt="Alternate Text" width="350" />
                                        </p>
                                        <hr />
                                        <p>
                                            <img class="full-image" src="assets/images/specs.png" alt="Alternate Text" width="350" />
                                        </p>
                                    </div>
                                    --}} 
                                    <div class="col-md-8">
                                        <h3>Product Specification</h3>
                                        <p>
                                         {!! $product->description !!}
                                        </p>
                                  
                                    </div>

                                </div> <!--/row-->
                            </div> <!--/content-->
                        </div> <!--/tab-pane-->
                        <!-- ============ tab #3 ============ -->

                        <div role="tabpanel" class="tab-pane" id="rating">

                            <!-- ============ ratings ============ -->

                            <div class="content">
                                <h3>Avis</h3>

                                <div class="row">

                                    <!-- === comments === -->

                                    <div class="col-md-12">
                                        <div class="comments">

                                            <!-- === rating === -->

                                            <div class="rating clearfix">

                                            </div>
                                            <div class="comment-wrapper">

                                                <!-- === comment === -->
                                                
                                               @foreach($product->avis as $avi)
                                                    <div class="comment-block">
                                                        <div class="comment-user">
                                                            <div><img src="{{asset('assets/images/user-2.jpg')}}" alt="{{$avi->name}}" width="70" /></div>
                                                            <div>
                                                                <h5>
                                                                    <span>{{$avi->name}}</span>
                                                                    <span class="pull-right">
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star active"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                                    <small>{{$avi->created_at}}</small>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <!-- comment description -->

                                                        <div class="comment-desc">
                                                            <p>
                                                                {{$avi->comment}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                          

                                            </div><!--/comment-wrapper-->

                                            <div class="comment-header">
                                                <a href="#" class="btn btn-clean-dark">{{$product->avis()->count()}} comments</a>
                                            </div> <!--/comment-header-->
                                            <!-- === add comment === -->

                                            <div class="comment-add">

                                                <div class="comment-reply-message">
                                                    <div class="h3 title">Ecrivez votre avi </div>
                                                    <p>Your email address will not be published.</p>
                                                </div>
                                                <div class="alert alert-success my-2 hidden" id="jquery_success_message">
                                                    Email successfully sent
                                                </div>

                                                <form action="{{route('products.avis',$product->slug)}}" method="post" id="jquery_form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control jquery_field" name="name" value="" placeholder="Nom " />
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_name"></div>
                                                        @csrf
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control jquery_field" name="email" value="" placeholder="E-mail" />
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_email"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea rows="10" class="form-control jquery_field" name="comment" placeholder="Commanter"></textarea>
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_comment"></div>
                                                    </div>
                                                    <div class="clearfix text-center">
                                                        
                                                        <button type="submit" class="btn btn-main">envoyer</button>
                                                    </div>
                                                </form>

                                            </div><!--/comment-add-->
                                        </div> <!--/comments-->
                                    </div>


                                </div> <!--/row-->
                            </div> <!--/content-->
                        </div> <!--/tab-pane-->
                    </div> <!--/tab-content-->
                </div>
            </div> <!--/row-->
        </div> <!--/container-->
    </div> <!--/info-->
</section>