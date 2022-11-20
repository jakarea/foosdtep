@extends('layouts.frontend')
@section('title') {{ __('Login Customer') }} @endsection

@section('content')

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40 my-5 py-3">
    <div class="container"> 
        <div class="row">
            <!-- Start Login Area -->
            <div class="col-lg-6 col-md-8 col-12 pe-md-0">
                <div class="section-content m-b-20">
                    <h5 class="section-content__title text-center">{{ __('text.my_account')}}</h5>
                </div>
                <div class="login-form-container">
                    <h5 class="sidebar__title">{{ __('text.login') }}</h5>
                    <div class="login-register-form">
                    @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                        <form action="{{ route('customer.login') }}" method="post">
                            @csrf
                            <div class="form-box__single-group">
                                <label for="email">{{ __('text.username_or_email_address') }} *</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('text.user_email') }} " required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group">
                                <label for="form-username-password">{{ __('text.password') }}  *</label>
                                <div class="password__toggle">
                                    <input type="password" id="form-username-password" name="password" class="@error('password') is-invalid @enderror" placeholder="{{ __('text.enter_password') }} " required autocomplete="current-password">
                                    <span data-bs-toggle="#form-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                <label for="account-remember">
                                    <input type="checkbox" name="account-remember" id="account-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span>{{ __('text.remember_me') }} </span>
                                </label>
                                <a class="link--gray" href="{{ route('forget.password.get') }}">{{ __('text.forgot_password') }} </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap m-tb-20 pt-3 align-middle">
                            <div class="regiter-acc text-end">
                                    <span>{{ __('text.dont_have_account') }}  <a href="{{ url('register') }}">{{ __('text.register_here') }} </a></span>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">{{ __('text.login') }} </button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>  <!-- End Login Area -->
            <div class="col-lg-6 col-md-8 col-12 ps-md-0">
                <div class="login-txt-wrap">
                    <h4>Onbezorgd ondernemen. <br> Word nu FoodSteps klant.</h4>

                    <p>Als ondernemer of instelling inkopen doen bij een FoodSteps-vestiging? Krijg met de klantenkaart vandaag nog exclusief toegang tot al onze vestigingen.</p>
                    <p>Grote verpakkingen, kleine prijzen <br>
Breed assortiment A-merken en eigen merken <br>
Altijd dichtbij en makkelijk bereikbaar <br>
Persoonlijk advies van échte vakmensen</p>
<a href="{{url('register')}}">{{ __('text.become_member')}}</a>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection