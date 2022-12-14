<!-- Start Header bottom area -->
<div class="header__bottom p-tb-10">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-2 col-lg-3">
                <div class="header-menu-vertical pos-relative">
                    <h4 class="menu-title link--icon-left d-flex justify-content-between"><span><i class="far fa-align-left"></i>{{ __('text.categories')}}</span> <i class="far fa-angle-down"></i></h4>
                    <ul class="menu-content pos-absolute">
                    @foreach(App\Models\Backend\Category::all() as $key => $category)
                        <li class="menu-item"><a href="{{ url('products?cat='.$category->slug)}}">{{ $category->name }} </a></li> 
                    @endforeach
                    </ul>
                </div>
            </div> 
            <div class="col-xl-8 col-lg-7 position-relative">
                <form class="header-search" action="{{ route('products') }}" method="get">
                    <div class="header-search__content pos-relative">
                        <input type="text" class="search__headerm" id="search__header" name="search" placeholder="Zoeken" required />
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                <div id="result_query" class="card result_querym" >
                    <div class="card-body result_html"></div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 ps-0 text-end">
            <a href="{{ route('products') }}" class="btn px-5 btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">{{ __('text.shop_now')}} <i class="fal fa-angle-right"></i></a>
            </div>
        </div> 
        <div class="row pt-2">
            <div class="col-lg-9">
                <div class="slogan-list-wrap">
                    <ul class="text-center">
                        <li><a href="javascript:void(0)"><i class="fas fa-check"></i> {{ __('text.wide_offer')}}</a></li>
                        <li><a href="javascript:void(0)"><i class="fas fa-check"></i> {{ __('text.plenty_inspier')}}</a></li>
                        <!-- <li><a href="javascript:void(0)"><i class="fas fa-check"></i> {{ __('text.always_branch')}}</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                @if(!Auth::check())
                <div class="slogan-bttn-wrap">
                    <a href="{{url('register')}}">{{ __('text.become_member')}}</a>
                    <a href="{{url('login')}}"><i class="fas fa-lock"></i>{{ __('text.login')}}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div> 

<!-- End Header bottom area -->