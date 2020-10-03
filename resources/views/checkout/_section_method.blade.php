<div class="col-md-12">

    <div class="white-block">

        <div class="h4">{{setting('checkout.mode_de_payment')}}</div>
    
        <hr/>

        <span class="checkbox">
            <input type="radio" class="tocheck" id="dilevry" name="paymentType">
             
            <label for="dilevry"> 
                <a href="{{route('checkout.delivery',$product->slug)}}">
                   {{setting('checkout.cache_on_delivery')}}
                </a>
            </label>
        </span>
        <span class="checkbox">
            <input type="radio" class="tocheck"  id="creditBanque" name="paymentType">
            <label for="creditBanque">
                <a href="{{route('checkout.banque',$product->slug)}}">
                   {{setting('checkout.credit_ste_banque')}}
                </a>
            </label>
            
        </span>
        <span class="checkbox">
            <input type="radio" class="tocheck" id="creditdirect" name="paymentType">
            <label for="creditdirect">
                <a href="{{route('checkout.direct',$product->slug)}}">
                  {{setting('checkout.credit_ste')}}
                </a>
            </label>
            
        </span>

        <hr />

        <div class="clearfix">
            {!! setting('checkout.payment') !!}
        </div>
    </div>

</div>