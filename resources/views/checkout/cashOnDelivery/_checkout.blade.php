
{{-- Powored by Elmarzougui Abdelghafour --}}
<section class="checkout">
    <div class="container">

        <header class="hidden">
            <h3 class="h3 title">{{setting('checkout.cache_on_delivery')}}</h3>
        </header>

        <!-- ========================  Cart navigation ======================== -->

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('checkout',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> {{$product->name}}</a>
                </div>
             
            </div>
        </div>

        <!-- ========================  Delivery ======================== -->
        @if($product->superficie)
          @include('checkout.cashOnDelivery._table_mt')
        @else
          @include('checkout.cashOnDelivery._table_qte')
        @endif

        <div class="cart-wrapper">

            <div class="note-block">
                <div class="row">
                   @include('checkout.cashOnDelivery._action')
                </div>
            </div>
        </div>

        <div class="clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <a href="{{route('checkout',$product->slug)}}" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> {{$product->name}}</a>
                </div>
            
            </div>
        </div>


    </div> <!--/container-->

</section>