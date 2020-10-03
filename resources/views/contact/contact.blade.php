<section class="contact">

    <!-- === Goolge map === -->

    <div id="map"></div>

    <div class="container">

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                <div class="contact-block">

                    <div class="contact-info">
                        <div class="row">
                            <div class="col-sm-6">
                                <figure class="text-center">
                                    <span class="icon icon-map-marker"></span>
                                    <figcaption>
                                        <strong>location</strong>
                                        <span>{{setting('contact.address')}}</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm-6">
                                <figure class="text-center">
                                    <span class="icon icon-phone"></span>
                                    <figcaption>
                                        <strong>Téléphone</strong>
                                        <span>
                                             {{setting('contact.tele')}} <br />
                                            
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            {{--<div class="col-sm-4">
                                <figure class="text-center">
                                    <span class="icon icon-clock"></span>
                                    <figcaption>
                                        <strong>Working hours</strong>
                                        <span>
                                            <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                            <strong>Sun</strong> 12pm - 2 pm
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>--}}
                        </div>
                    </div>

                    <div class="banner">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10 text-center">
                                <h2 class="title">{{setting('contact.sendus_msg')}}</h2>
                                <p>
                                   {{setting('contact.sendus_msg_desc')}}
                                </p>

                                <div class="contact-form-wrapper">

                                    {{--<a class="btn btn-clean open-form" data-text-open="Contact us via form" data-text-close="Close form">Contact us via form</a>--}}

                                    <div class="contact-formd clearfix">
                                        <div class="alert alert-success my-2 hidden" id="jquery_success_message">
                                            votre message a été envoyé avec succès <br>
                                            merci d'avoir nous contacter
                                        </div>
                                        <form id="sendmail" name="sendmail" action="{{route('contact')}}" method="post">
                                            <div class="row">
                                                @csrf
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="Name" name="nom" type="text" value="" class="form-control jquery_field" placeholder="Nom Complet" >
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_nom"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="Email" name="email" type="email" value="" class="form-control jquery_field" placeholder="E-Mail" >
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_email"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input id="Subject" name="subject" type="text" value="" class="form-control jquery_field" placeholder="Suject" >
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_subject"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea id="Comment" name="comment" class="form-control jquery_field" placeholder="message" rows="10"></textarea>
                                                        <div class="alert alert-danger jquery_error_message hidden" id="jquery_error_comment"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <input type="submit" class="btn btn-clean" value="envoyer" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{--<div class="contact-info">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Sales</strong>
                                        <span>
                                            <strong>T</strong> +1 125 251 4586 <br />
                                            <strong>F</strong> +1 251 333 5555
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Services</strong>
                                        <span>
                                            <strong>T</strong> +1 654 333 8541 <br />
                                            <strong>F</strong> +1 125 251 5555
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Support</strong>
                                        <span>
                                            <strong>T</strong> +1 222 852 9632 <br />
                                            <strong>F</strong> +1 357 333 5555
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Human resources</strong>
                                        <span>
                                            <strong>T</strong> +1 963 333 8745 <br />
                                            <strong>F</strong> +1 159 333 5555
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Factory</strong>
                                        <span>
                                            <strong>T</strong> +1 753 333 1259 <br />
                                            <strong>F</strong> +1 247 652 5555
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <figure>
                                    <figcaption>
                                        <strong>Delivery</strong>
                                        <span>
                                            <strong>T</strong> +1 134 197 7532 <br />
                                            <strong>F</strong> +1 291 468 4563
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>--}}


                </div>


            </div><!--col-sm-8-->
        </div> <!--/row-->
    </div><!--/container-->
</section>