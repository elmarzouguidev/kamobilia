<footer>
    <div class="container">

        <!--footer showroom-->
        <div class="footer-showroom">
            <div class="row">
                <div class="col-sm-8">
                    <h2>{{setting('footer.showroom')}}</h2>
                    <p>{{setting('contact.address')}}</p>
                   
                </div>
                <div class="col-sm-4 text-center">
                    <a href="#" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                    <div class="call-us h4"><span class="icon icon-phone-handset"></span> {{setting('contact.tele')}}</div>
                </div>
            </div>
        </div>

        <!--footer links-->
        <div class="footer-links">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h5>lien rapide</h5>
                    <ul>
                    <li><a href="{{route('categories')}}">catégories</a></li>
                        <li><a href="{{route('promos')}}">promos du mois</a></li>
                        <li><a href="{{route('news')}}">Nouveauté</a></li>
                    </ul>
                </div>
                {{--<div class="col-sm-4 col-md-2">
                    <h5>Recources</h5>
                    <ul>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Sales</a></li>
                    </ul>
                </div>--}}
                <div class="col-sm-4 col-md-2">
                    <h5> société</h5>
                       
                    <ul>
                        <li><a href="{{route('about')}}">à-propos</a></li>
                        <li><a href="{{route('terms')}}">condition d'utilisation</a></li>
                        <li><a href="{{route('contact')}}">contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h5>Inscrivez-vous à notre newsletter</h5>
                        
                    <p>
                        <i>
                            
                          Ajoutez votre adresse e-mail pour vous inscrire à nos e-mails mensuels et recevoir des offres promotionnelles.
                        </i>
                    </p>
                    <div class="alert alert-success hidden" id="jquery_success_message">
                        merci de votre abonnement
                    </div>
                    <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_email"></div>
                    <div class="form-group form-newsletter">
                        
                       <form action="{{route('subscribe')}}" method="post" id="formSubsciber">
                            @csrf
                        
                            <input class="form-control jquery_field" type="email" name="email" value="" placeholder="Email address" />
                            
                            <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--footer social-->

        <div class="footer-social">
            <div class="row">
              
                <div class="col-sm-6 links">
                    <ul>
                        <li><a href="{{setting('social-link.facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="{{setting('social-link.instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>