<div class="login-block login-block-signup">

    <div class="h4">Paiement Credit par etablissement de credit
         {{--<a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a>--}}
    </div>

    <hr/>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('checkout.banque',$product->slug)}}" class="myForm" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 form-creditdilevry">
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="nom" class="form-control nomComplet @error('nom') is-invalid @enderror" value="{{old('nom')}}" placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="prenom" class="form-control prenom" value="{{old('prenom')}}" placeholder="Prénom" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control prenom" value="{{old('email')}}" placeholder="E-mail" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="product" value="{{$product->slug}}" readonly>
                        <input type="hidden" name="totalPriceer" id="totalPriceer" value="{{$product->prix}}" readonly>
                        <input type="hidden" name="totalQtee" id="totalQtee" value="1" min="1" readonly>
                        <input type="text" name="tele" class="form-control tele" value="{{old('tele')}}" placeholder="Téléphone" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="address" class="form-control tele" value="{{old('address')}}" placeholder="Adresse" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    {{--<input type="text" name="cartnational" class="form-control cartNational" value="{{old('cartnational')}}" placeholder="carte national code" />--}}
                    <label for="cartN">Cart National (pdf,docx,jpeg,png,jpg,gif) max 2mb</label>
                    <input type="file" name="cartnational" class="form-control-file @error('cartnational') is-invalid @enderror" id="cartN">
                    </div>
                </div>
                  
            </div>
            
            <div class="col-md-12">
                <hr/>
                <span class="checkbox" >
                    <input type="checkbox" id="checkBoxId1" required>
                <label for="checkBoxId1">
                    J'ai lu et j'accepte 
                    <a target="_blank" href="{{route('terms')}}">les conditions</a>
                </label>
                </span>
   
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-main">confirmer la commande</button>
            </div>

        </div>
    </form>
</div> 