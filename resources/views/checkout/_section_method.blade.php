<div class="col-md-12">

    <div class="white-block">

        <div class="h4">choisir un mode de paiement</div>
    
        <hr/>

        <span class="checkbox">
            <input type="radio" class="tocheck" id="dilevry" name="paymentType">
             
            <label for="dilevry"> <a href="{{route('checkout.delivery',$product->slug)}}">Paiement cash a la livraison </a></label>
        </span>
        <span class="checkbox">
            <input type="radio" class="tocheck"  id="creditBanque" name="paymentType">
            <label for="creditBanque"><a href="{{route('checkout.delivery',$product->slug)}}">Paiement Credit par etablissement de credit</a></label>
            
        </span>
        <span class="checkbox">
            <input type="radio" class="tocheck" id="creditdirect" name="paymentType">
            <label for="creditdirect"><a href="{{route('checkout.delivery',$product->slug)}}">Paiement a credit par cheque directe a la societe</a></label>
            
        </span>

        <hr />

        <div class="clearfix">
            <p>A frequently overlooked, powerful fulfillment option is offering local pick-up. If you have a physical location and can allow your customers to forgo paying shipping costs altogether, you should!</p>                            <p><strong>Benefits:</strong></p>
            <ul>
                <li>Avoid both shipping and packaging costs</li>
                <li>Develop a face-to-face relationship with your customers</li>
                <li>Potential for additional purchases while customers are at your store</li>
            </ul>
            <p><strong>Challenges:</strong></p>
            <ul>
                <li>Limited business hours can sometimes make it difficult to coordinate pickup</li>
                <li>Shoppers who cross state lines or ZIP codes may not know the sales tax rates in your area</li>
            </ul>
        </div>
    </div>

</div>