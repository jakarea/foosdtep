<!-- Start Header bottom area -->
<div class="header__bottom p-tb-30">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="header-menu-vertical pos-relative">
                        <h4 class="menu-title link--icon-left d-flex justify-content-between"><span><i class="far fa-align-left"></i>{{ __('text.categories')}}</span> <i class="far fa-angle-down"></i></h4>
                        <ul class="menu-content pos-absolute">
                        @foreach(App\Models\Backend\Category::all() as $key => $category)
                            <li class="menu-item"><a href="{{ route('show.category', $category->slug)}}">{{ $category->name }} </a></li> 
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <form class="header-search" action="{{ route('autocompleteSearch') }}" method="post">
                        @csrf
                        <div class="header-search__content pos-relative">
                            <input type="text" id="search" name="search" placeholder="Search" required />
                            <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-3">
                <a href="{{ route('products') }}" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">{{ __('text.shop_now')}} <i class="fal fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div> <!-- End Header bottom area -->