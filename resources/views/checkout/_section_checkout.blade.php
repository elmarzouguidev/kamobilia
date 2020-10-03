<section class="checkout">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">{{$product->name}}</h3>
        </header>

        <!-- ========================  Cart navigation ======================== -->

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('products.single',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> {{$product->name}}</a>
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
                    
                    </div>
                </div>
            
    

            <!--cart prices -->

            {{--<div class="clearfix">
                <div class="cart-block cart-block-footer clearfix">
                    <div>
                        <strong>Discount 15%</strong>
                    </div>
                    <div>
                        <span>$ 159,00</span>
                    </div>
                </div>

       
            </div>--}}

            <!--cart final price -->

            {{--<div class="clearfix">
                <div class="cart-block cart-block-footer clearfix">
                    <div>
                        <strong>le prix total</strong>
                    </div>
                    <div>
                        <div class="h2 title">$ 1259,00</div>
                    </div>
                </div>
            </div>--}}
        </div>
        <div class="cart-wrapper">

            <div class="note-block">
                <div class="row">

                    @if($product->personalized)

                        @include('checkout.personalized._form')
                    @else 
                        @include('checkout._section_method')   
                    @endif
                  
                   {{--@include('checkout._section_action')--}} 
                </div>
            </div>
        </div>

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('products.single',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span>{{$product->name}}</a>
                </div>
            
            </div>
        </div>


    </div> <!--/container-->

</section>