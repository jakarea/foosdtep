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
            <div class="col-xl-7 col-lg-6 position-relative">
                <form class="header-search" action="{{ route('autocompleteSearch') }}" method="post">
                    @csrf
                    <div class="header-search__content pos-relative">
                        <input type="text" name="search" placeholder="Zoeken" required />
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-xl-2 col-lg-3">
            <a href="{{ route('products') }}" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">{{ __('text.shop_now')}} <i class="fal fa-angle-right"></i></a>
            </div>
        </div> 
        <div class="row pt-2">
            <div class="col-lg-9">
                <div class="slogan-list-wrap">
                    <ul class="text-center">
                        <li><a href="#"><i class="fas fa-check"></i> {{ __('text.wide_offer')}}</a></li>
                        <li><a href="#"><i class="fas fa-check"></i> {{ __('text.plenty_inspier')}}</a></li>
                        <!-- <li><a href="#"><i class="fas fa-check"></i> {{ __('text.always_branch')}}</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="slogan-bttn-wrap">
                    <a href="{{url('register')}}">{{ __('text.become_member')}}</a>
                    <a href="{{url('login')}}"><i class="fas fa-lock"></i>{{ __('text.login')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="header-slogan-wrap bg-white py-2">
    <div class="container">
        
    </div>
</div> -->

<!-- End Header bottom area -->