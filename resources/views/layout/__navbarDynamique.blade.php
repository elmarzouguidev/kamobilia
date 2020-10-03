                            <li>
                                <a href="{{route('categories')}}">catégories<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->
                                        <div class="box-1">
                                            <div class="image">
                                                <img src="assets/images/blog-2.jpg" alt="Lorem ipsum" />
                                            </div>
                                            <div class="box">
                                                <div class="h2">Best ideas</div>
                                                <div class="clearfix">
                                                    <p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research and a creative spirit.</p>
                                                    <a class="btn btn-clean btn-big" href="ideas.html">Explore</a>
                                                </div>
                                            </div>
                                        </div> <!--/box-1-->

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="clearfix categories">
                                                <div class="row">
                                     
                                                    {{--<div class="col-sm-3 col-xs-6">
                                                        <a href="javascript:void(0);">
                                                            <figure>
                                                                <i class="f-icon f-icon-sofa"></i>
                                                                <figcaption>Sofa</figcaption>
                                                            </figure>
                                                        </a>
                                                    </div>--}}
            
                                                    @foreach($categories as $categorie)  
                                                        <div class="col-sm-3 col-xs-6">
                                                            <a href="{{route('categories.single',$categorie->slug)}}">
                                                                <figure>
                                                                <i class="f-icon {{$categorie->icon_code ?? 'f-icon-sofa'}}"></i>
                                                                    <figcaption>{{$categorie->name}}</figcaption>
                                                                </figure>
                                                            </a>
                                                        </div>
                                                     
                                                    @endforeach
                                                    
                                                    <!--icon item-->                                                

                                                </div> <!--/row-->
                                            </div> <!--/categories-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>