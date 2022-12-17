<!-- ::::::  Start  Footer ::::::  -->
    <footer class="footer">
        <div class="container"> 
            <!-- Start Footer Top Section --> 
            <div class="footer__top">
                <div class="row"> 
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.html" class="footer__logo-link">
                                    <img src="assets/img/logo/logo.png" alt="" class="footer__logo-img">
                                </a>
                            </div>
                            <ul class="footer__address">
                                <li class="footer__address-item"><i class="fa fa-home"></i>Burgemeester van loonstraat 83, 4651 VG, Steenbergen</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+31 6 11 21 71 70</li>
                                <li class="footer__address-item">
                                    
                                <a href="mailto:contact@food-steps.nl" style="color: #323232;"><i class="fa fa-envelope"></i>contact@food-steps.nl</a></li>
                            </ul>
                            <ul class="footer__social-nav">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">MENU</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="{{ url('/') }}" class="footer__link">{{ __('Home')}}</a></li> 
                                <li class="footer__list"><a href="{{ url('/products') }}" class="footer__link">{{__('messages.products')}}</a></li> 
                                <li class="footer__list"><a href="{{ url('/about') }}" class="footer__link">{{ __('messages.about')}}</a></li> 
                                <li class="footer__list"><a href="{{ url('/contact') }}" class="footer__link">{{ __('messages.contact') }}</a></li> 
                            </ul>
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">{{__('messages.categories')}}</h4>
                            <ul class="footer__nav">
                                @foreach(App\Models\Backend\Category::all() as $key => $category)
                                    <li class="footer__list"><a href="{{ route('show.category', $category->slug)}}" class="footer__link">{{ $category->name }} </a></li> 
                                @endforeach 

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">{{__('messages.my_account')}}</h4>
                            <ul class="footer__nav">  
                                <li class="footer__list"><a href="#" class="footer__link">{{__('messages.customer_services')}}</a></li> 
                                <li class="footer__list"><a href="#" class="footer__link">{{__('messages.general_question')}}</a></li>
                                <li class="footer__list"><a href="{{ url('blog') }}" class="footer__link">{{__('messages.blogs')}}</a></li>  
                                <li class="footer__list"><a href="#" class="footer__link">{{__('messages.store_location')}}</a></li> 
                                @if(!Auth::check())
                                <li class="footer__list"><a href="{{ url('login') }}" class="footer__link">{{__('messages.login')}}</a></li>
                                <li class="footer__list"><a href="{{ url('register') }}" class="footer__link">{{__('messages.signup')}}</a></li>
                                @endif
                               
                                <li class="footer__list"><a href="#" class="footer__link">{{__('messages.refund')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red" > {{__('messages.opening_time') }}</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"> Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list"> Sat: 9AM-8PM</li>
                                <li class="footer__list"> Suns: 14hPM-18hPM</li>
                                <li class="footer__list"> Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list">{{__('messages.we_work_all_holiday') }} </li> 
                            </ul>
                        </div>
                    </div> -->
                </div> 
            </div>
         <!-- End Footer Top Section -->
            <!-- Start Footer Bottom Section --> 
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Start Footer Copyright Text -->
                        <div class="footer__copyright-text text-center"> 
                            <p>Ontworpen en ontwikkelt door <a href="https://gonextlevel.agency/">Go Next Level Marketing Agency</a></p>
                        </div> 
                        <!-- End Footer Copyright Text -->
                    </div> 
                </div>
            </div> <!-- End Footer Bottom Section --> 
        </div>
    </footer> 
    <!-- ::::::  End  Footer ::::::  -->
    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
 