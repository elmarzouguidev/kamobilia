<section class="checkout">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">Checkout - Step 2</h3>
        </header>

        <!-- ========================  Cart navigation ======================== -->

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('checkout',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                </div>
             
            </div>
        </div>

        <!-- ========================  Delivery ======================== -->
        <div class="cart-wrapper">
            <!--cart header -->

            <div class="cart-block cart-block-header clearfix">
                <div>
                    <span>Produit</span>
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span>Quantité</span>
                </div>
                <div class="text-right">
                    <span>Prix</span>
                </div>
            </div>

            <!--cart items-->

            <div class="clearfix">
                <div class="cart-block cart-block-item clearfix">
                    <div class="image">
                        <a href="{{route('products.single',$product->slug)}}"><img src="{{Voyager::image($product->photo)}}" alt="{{$product->name}}" /></a>
                    </div>
                    <div class="title">
                        <div class="h4"><a href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></div>
                        <div>{{$product->name}}</div>
                    </div>
                   {{--<div class="quantity">
                        <strong>1</strong>
                        
                    </div>--}}
                    <div class="quantity">
                        <input type="number" value="2" class="form-control form-quantity" />
                    </div>
                    <div class="price">
                        <span class="final h3">{{$product->prix}} - MAD</span>
                       {{--<span class="discount">$ 2.666</span>--}} 
                    </div>
                </div>
            </div>

            <!--cart prices -->

           {{--
            <div class="clearfix">
                <div class="cart-block cart-block-footer clearfix">
                    <div>
                        <strong>Discount 15%</strong>
                    </div>
                    <div>
                        <span>$ 159,00</span>
                    </div>
                </div>

       
            </div>
            --}}

            <!--cart final price -->

            <div class="clearfix">
                <div class="cart-block cart-block-footer clearfix">
                  
                    <div>
                        {{-- <strong>Promo code included!</strong>--}}
                    </div>
                    
                    <div>
                        <div class="h2 title">{{$product->prix}} - MAD</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-wrapper">

            <div class="note-block">
                <div class="row">

                   
             
                   @include('checkout.creditDirect._action')
                </div>
            </div>
        </div>

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('checkout',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                </div>
            
            </div>
        </div>


    </div> <!--/container-->

</section>