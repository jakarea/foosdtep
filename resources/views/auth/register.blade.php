@extends('layouts.fullwidth')

@section('content')
<div class="home-btn d-none d-sm-block">
    <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">Free Register</h5>
                            <p class="text-white-50 mb-0">Get your free FoodStep account now</p>
                            <a href="index.html" class="logo logo-admin mt-4">
                                <img src="{{ asset('backend/assets/images/logo-sm-dark.png') }}" alt="" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">

                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="mb-3">
                                        <label class="form-label" for="Name">Name</label>                                    
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Enter email">
                                        
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>                                    
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Enter password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary w-100 waves-effect waves-light"
                                        type="submit">{{ __('Register') }}</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="mb-0">{{ __('messages.agree_to_terms')}}<a href="#"
                                            class="text-primary">{{ __('messages.terms_cond')}}</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>{{__('messages.already_have_account')}}  
                        <a href="{{ route('login') }}" class="fw-medium text-primary">
                            Login</a> </p>
                    <p>??
                        <script>document.write(new Date().getFullYear())</script> FoodStep. Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Themesbrand
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
