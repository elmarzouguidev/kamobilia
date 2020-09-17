
{{-- Powored by Elmarzougui Abdelghafour --}}
<div class="cart-wrapper">
    <!--cart header -->

    <div class="cart-block cart-block-header clearfix">
        <div>
            <span>Produit</span>
        </div>
        <div>
            <span>&nbsp;</span>
        </div>
        {{--<div>
            <span>Quantité</span>
        </div>--}}
        <div class="text-right">
            <span>Prix de m²</span>
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
            <div class="price">
                <span class="final h6"> {{$product->prix}} MAD</span>
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
                <form method="post" class="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-creditdilevry">
                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="surfface">entere votre superficie en m²</label>
                                    <input required type="hidden" name="productPrice" id="productPrice" value="{{$product->prix}}" />
                                    <input required 
                                    type="number" 
                                    min="1"
                                    name="surfface" 
                                    id="surfface" 
                                    class="form-control" 
                                    value="{{old('surfface')}}" 
                                    placeholder="entere votre superficie "
                                    onchange="event.preventDefault(); calculatePrice();"
                                     />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <div class="h2 title"  id="totalpricer">{{$product->prix}} - MAD</div>
            </div>
        </div>
    </div>
</div>