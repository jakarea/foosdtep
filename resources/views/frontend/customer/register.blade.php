@extends('layouts.frontend')
@section('title') {{ __('Register Customer') }} @endsection
@section('content')
 

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40 m-t-40">
    <div class="container">
        <div class="row"> 
            <!-- Start Login Area --> 
            <div class="col-lg-6 col-md-8 col-12 pe-md-0">
            <div class="section-content m-b-20">
                    <h5 class="section-content__title text-center">{{ __('text.my_account')}}</h5>
                </div>
                <div class="login-form-container">
                    <h5 class="sidebar__title">{{__('text.register') }}</h5>
                    <div class="login-register-form">
                        @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    {{ session()->flash("error", $error); }}
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('customer.registration') }}" method="POST">
                            @csrf
                            <div class="form-box__single-group">
                                <label for="name">{{__('text.full_name') }}  *</label>
                                <input type="text" class="@error('name') is-invalid @enderror"
                                value="{{ old('name') }}" id="name" name="name" autofocus required
                                    placeholder="{{__('text.full_name') }} ">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group">
                                <label for="kvk">KVK nummer *</label>
                                <input type="text" class="@error('kvk') is-invalid @enderror" id="kvk"
                                value="{{ old('kvk') }}" name="kvk" placeholder="KVK nummer" autofocus required>
                                @error('kvk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group">
                                <label for="vat">VAT nummer *</label>
                                <input type="text" class="@error('vat') is-invalid @enderror" id="vat"
                                value="{{ old('vat') }}" name="vat" placeholder="VAT nummer" autofocus required>
                                @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group">
                                <label for="email">{{__('text.email_address') }} *</label>
                                <input type="email" class="@error('email') is-invalid @enderror" id="email"
                                value="{{ old('email') }}" name="email" placeholder="{{__('text.') }} Enter email" autofocus required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group m-b-20">
                                <label for="form-register-username-password">{{__('text.password') }} *</label>
                                <div class="password__toggle">
                                    <input type="password" class="@error('password') is-invalid @enderror" name="password" id="form-register-username-password" placeholder="{{__('text.enter_password') }} " autofocus required>
                                    <span data-bs-toggle="#form-register-username-password" class="password__toggle--btn fa fa-fw fa-eye d-block"></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap m-tb-20 pt-3 align-middle">
                            <div class="regiter-acc text-end">
                                    <span>{{__('text.already_have_account') }} <a href="{{ url('login') }}">{{__('text.login_here') }}</a></span>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">{{__('text.register_now') }} </button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>  <!-- End Login Area -->
            <div class="col-lg-6 col-md-8 col-12 ps-md-0">
                <div class="login-txt-wrap" style="height: 90.5%;">
                    <h4>Onbezorgd ondernemen. <br> Word nu Sligro klant.</h4>

                    <p>Als ondernemer of instelling inkopen doen bij een Sligro-vestiging? Krijg met de klantenkaart vandaag nog exclusief toegang tot al onze vestigingen.</p>
                    <p>Grote verpakkingen, kleine prijzen <br>
Breed assortiment A-merken en eigen merken <br>
Altijd dichtbij en makkelijk bereikbaar <br>
Persoonlijk advies van échte vakmensen</p> <a href="{{url('login')}}"><i class="fas fa-lock me-2"></i>{{ __('text.login')}}</a>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection