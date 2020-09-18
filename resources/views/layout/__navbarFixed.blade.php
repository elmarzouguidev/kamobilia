
<nav class="navbar-fixed">

    <div class="container">

        <!-- ==========  Top navigation ========== -->

        <div class="navigation navigation-top clearfix">
            <ul>
                <!--add active class for current page-->

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                <!--Currency selector-->

                <li class="nav-settings">
                    <a href="javascript:void(0);" class="nav-settings-value"> MAD</a>
                    <ul class="nav-settings-list">
                        <li>MAD</li>
                    
                    </ul>
                </li>

                <!--Language selector-->

                <li class="nav-settings">
                    <a href="javascript:void(0);" class="nav-settings-value"> FR</a>
                    <ul class="nav-settings-list">
                        <li>FR</li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
                <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li>
            </ul>
        </div> <!--/navigation-top-->

        <!-- ==========  Main navigation ========== -->

        <div class="navigation navigation-main">

            <!-- Setup your logo here-->

            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('assets/images/logo.png')}}" alt="" />
            </a>

            <!-- Mobile toggle menu -->

            <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

            <!-- Convertible menu (mobile/desktop)-->

            <div class="floating-menu">

                <!-- Mobile toggle menu trigger-->

                <div class="close-menu-wrapper">
                    <span class="close-menu"><i class="icon icon-cross"></i></span>
                </div>

                <ul>
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li><a href="{{route('categories')}}">Categorie</a></li>
                    <li><a href="{{route('promos')}}">Promo du mois</a></li>
                    <li><a href="{{route('news')}}">Nouveauté</a></li>
                    <li><a href="{{route('contact')}}">Contactez nous </a></li>
                </ul>
            </div> <!--/floating-menu-->
        </div> <!--/navigation-main-->

        <!-- ==========  Search wrapper ========== -->

        <!-- Search by haymacproduction -->
        <livewire:search-dropdown>
        <!-- ==========  Login wrapper ========== -->

        <div class="login-wrapper">
            <form>
                <div class="h4">Sign in</div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="#forgotpassword" class="open-popup">Forgot password?</a>
                    <a href="#createaccount" class="open-popup">Don't have an account?</a>
                </div>
                <button type="submit" class="btn btn-block btn-main">Submit</button>
            </form>
        </div>

        <!-- ==========  Cart wrapper ========== -->

        <div class="cart-wrapper">
            <div class="checkout">
                <div class="clearfix">

                    <!--cart item-->

                    <div class="row">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-1.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div><a href="product.html">Green corner</a></div>
                                <small>Green corner</small>
                            </div>
                            <div class="quantity">
                                <input type="number" value="2" class="form-control form-quantity" />
                            </div>
                            <div class="price">
                                <span class="final">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                        <!--cart item-->

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-2.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div><a href="product.html">Green corner</a></div>
                                <small>Green corner</small>
                            </div>
                            <div class="quantity">
                                <input type="number" value="2" class="form-control form-quantity" />
                            </div>
                            <div class="price">
                                <span class="final">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                        <!--cart item-->

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-3.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div><a href="product.html">Green corner</a></div>
                                <small>Green corner</small>
                            </div>
                            <div class="quantity">
                                <input type="number" value="2" class="form-control form-quantity" />
                            </div>
                            <div class="price">
                                <span class="final">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                        <!--cart item-->

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-4.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div><a href="product.html">Green corner</a></div>
                                <small>Green corner</small>
                            </div>
                            <div class="quantity">
                                <input type="number" value="2" class="form-control form-quantity" />
                            </div>
                            <div class="price">
                                <span class="final">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>
                    </div>

                    <hr />

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Shipping</strong>
                            </div>
                            <div>
                                <span>$ 30,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>VAT</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Total</strong>
                            </div>
                            <div>
                                <div class="h4 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>


                    <!--cart navigation -->

                    <div class="cart-block-buttons clearfix">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!--/checkout-->
        </div> <!--/cart-wrapper-->
    </div> <!--/container-->
</nav>