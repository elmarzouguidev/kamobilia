<div>
    <div class="search-wrapper @if(isset($class)){{$class}}@endif">

        <!-- Search form -->
        <input wire:model.defer="search" type="text" class="form-control" placeholder="Search..." />
        {{--<input wire:model.lazy="search" type="text" class="form-control" placeholder="Search..." />--}}
        {{--<input wire:model.defer="search" type="text" class="form-control" placeholder="Search..." />--}}

        <button wire:click.prevent="getData()"  class="btn btn-main btn-search">Entrer</button>

        <!-- Search results - live search -->
        <div class="search-results">
            <div class="search-result-items">
                <div class="title h4">Produits
                    <a href="{{route('categories')}}" class="btn btn-clean-dark btn-xs">
                        Voir tous
                    </a>
                </div>
                <ul>
                @if(isset($products) && $products->count() > 0)
                        @foreach($products as $product)
                            <li>
                                <a href="{{route('products.single',$product->slug)}}" target="_blank">
                                    {{--<span class="id">42563</span>--}}
                                    <span class="name">{{$product->name}}</span>
                                    <span class="category">{{$product->category->name}}</span>
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li>
                            
                                {{--<span class="id">42563</span>--}}
                                <span class="name">no produits</span>
                                <span class="category"></span>
                           
                        </li>
                    @endif
                    
                </ul>
                
            </div> <!--/search-result-items-->
            <div class="search-result-items">
                <div class="title h4">Catégories
                    {{--<a href="#" class="btn btn-clean-dark btn-xs">View all</a>--}}
                </div>
                <ul>
                    @if(isset($cats) && $cats->count() > 0)
                        @foreach($cats as $cat)
                            <li>
                                <a href="{{route('categories.single',$cat->slug)}}" target="_blank">

                                    <span class="name">{{$cat->name}} &nbsp; : &nbsp; </span>
                                    {{--<span class="id">{{$cat->products()->count()}}</span>--}}
                                
                                    <span class="category">({{$cat->products()->count()}}&nbsp;produits)</span>
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li>
                            <a href="{{route('categories')}}" target="_blank">
                                {{--<span class="id">42563</span>--}}
                                <span class="name">no categories</span>
                                <span class="category"></span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div> <!--/search-result-items-->
            
        </div> <!--/search-results-->
    
    </div>
</div>
{{--$products->links() --}}