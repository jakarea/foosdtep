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
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>info@foodsteps.nl</li>
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
                                <li class="footer__list"><a href="{{ url('/') }}" class="footer__link">Home</a></li> 
                                <li class="footer__list"><a href="{{ url('/products') }}" class="footer__link">Products</a></li> 
                                <li class="footer__list"><a href="{{ url('/about') }}" class="footer__link">Over Ons</a></li> 
                                <li class="footer__list"><a href="{{ url('/contact') }}" class="footer__link">Contact</a></li> 
                            </ul>
                        </div> 
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">CATEGORIES</h4>
                            <ul class="footer__nav">
                                @foreach(App\Models\Backend\Category::all() as $key => $category)
                                    <li class="footer__list"><a href="{{ route('show.category', $category->slug)}}" class="footer__link">{{ $category->name }} </a></li> 
                                @endforeach
 
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">MY ACCOUNT</h4>
                            <ul class="footer__nav">  
                                <li class="footer__list"><a href="#" class="footer__link">Store Location</a></li> 
                                <li class="footer__list"><a href="{{ url('login') }}" class="footer__link">Login</a></li>
                                <li class="footer__list"><a href="{{ url('register') }}" class="footer__link">Sign Up</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Refund & Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">OPENING TIME</h4>
                            <ul class="footer__nav">
                                <li class="footer__list">Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list">Sat: 9AM-8PM</li>
                                <li class="footer__list">Suns: 14hPM-18hPM</li>
                                <li class="footer__list">Mon - Fri: 8AM - 10PM</li>
                                <li class="footer__list">We Work All The Holidays</li> 
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
         <!-- End Footer Top Section -->
            <!-- Start Footer Bottom Section --> 
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <!-- Start Footer Copyright Text -->
                        <div class="footer__copyright-text"> 
                            <p>&copy; 2022 <a href="#">FoodStep.</a> {{ __('text.crafted_with')}} <i class="fas fa-heart text-danger"></i></p>
                        </div> <!-- End Footer Copyright Text -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <!-- Start Footer Payment Logo -->
                        <div class="footer__payment">
                            <a href="#" class="footer__payment-link">
                                <img src="assets/img/company-logo/payment.png" alt="" class="footer__payment-img">
                            </a>
                        </div>  <!-- End Footer Payment Logo -->
                    </div>
                </div>
            </div> <!-- End Footer Bottom Section --> 
        </div>
    </footer> <!-- ::::::  End  Footer ::::::  -->


    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
 