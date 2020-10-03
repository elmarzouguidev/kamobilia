
<nav class="navbar-fixed">

    <div class="container">

        <!-- ==========  Top navigation ========== -->

        <div class="navigation navigation-top clearfix">
            <ul>
                <!--add active class for current page-->

                <li>
                    <a href="{{setting('social-link.facebook')}}" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="{{setting('social-link.instagram')}}" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}

                <!--Currency selector-->

                <li class="nav-settings">
                    <a href="javascript:void(0);" class="nav-settings-value"> MAD</a>
                    {{--<ul class="nav-settings-list">
                        <li>MAD</li>
                    
                    </ul>--}}
                </li>

                <!--Language selector-->

                <li class="nav-settings">
                    <a href="javascript:void(0);" class="nav-settings-value"> FR</a>
                    {{--<ul class="nav-settings-list">
                        <li>FR</li>
                    </ul>--}}
                </li>
                {{--<li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>--}}
                <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                {{--<li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li>--}}
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
                    {{--<li><a href="{{route('categories')}}">Categorie</a></li>--}}
                    @include('layout.__navbarDynamique')
                    <li><a href="{{route('promos')}}">Promo du mois</a></li>
                    <li><a href="{{route('news')}}">Nouveauté</a></li>
                    <li><a href="{{route('contact')}}">Contactez nous </a></li>
                </ul>
            </div> <!--/floating-menu-->
        </div> <!--/navigation-main-->

    
        <!-- Search by haymacproduction -->
        <livewire:search-dropdown>

        {{--@include('layout.__cart')--}}

    </div> <!--/container-->
</nav>