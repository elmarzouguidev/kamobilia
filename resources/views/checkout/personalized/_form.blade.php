<div class="col-md-12">

    <div class="white-block">
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
    <form method="post" action="{{route('checkout.perso',$product->slug)}}" class="myForm" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 form-creditdilevry">
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="nom" class="form-control nomComplet" value="{{old('nom')}}" placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="prenom" class="form-control prenom" value="{{old('prenom')}}" placeholder="prénom" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control prenom" value="{{old('email')}}" placeholder="email" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="tele" class="form-control prenom" value="{{old('tele')}}" placeholder="Numéro téléphone" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="address" class="form-control prenom" value="{{old('address')}}" placeholder="address" />
                    </div>
                </div>
                <input type="hidden" name="product" value="{{$product->slug}}" readonly>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="messager">décrivez votre besoin </label>
                        <textarea class="form-control" id="messager" name="message" rows="3">{{old('message')}}</textarea>
                    </div>
                </div>
                  
            </div>
            
            <div class="col-md-12">
                <hr/>
                <span class="checkbox" >
                    <input type="checkbox" id="checkBoxId1" required>
                <label for="checkBoxId1">
                    I have read and accepted the 
                    <a target="_blank" href="{{route('terms')}}">terms</a>
                </label>
                </span>
   
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-main">confirmer la commande</button>
            </div>

        </div>
    </form>
</div>
</div>