<div class="col-md-12 form-creditEta">

    <p> les informations de banque : </p>
   
        <span class="checkbox">
            <input type="checkbox" id="newClient" title="clique here">
            <label for="newClient">vous êtes nouveau client ?</label>
                
                
        </span>
    
    <div class="col-md-12">
        <div class="form-group">
        <input type="text" name="cnie" class="form-control cartNational" value="{{old('cnie')}}" placeholder="carte national code" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <input type="text" name="nomEta" class="form-control nomComplet" value="" placeholder="Nom" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" name="prenomEta" class="form-control prenom" value="" placeholder="Prénom" />
        </div>
    </div>
      
</div>