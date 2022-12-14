@extends('layouts.fullwidth')

@section('content')

<div class="home-btn d-none d-sm-block">
    <a href="{{url('/')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">{{ __('messages.welcome_back') }}</h5>
                            <p class="text-white-50 mb-0">{{ __('messages.singin_continue')}}</p>
                            <a href="{{url('/')}}" class="logo logo-admin mt-4">
                                <img src="{{asset ('frontend/assets/img/logo/logo.png') }}" alt="Logo" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="col-form-label text-md-end">{{ __('text.email_address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('text.enter_email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-form-label text-md-end">{{ __('text.password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('text.enter_password')}}" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('text.remember_me') }}
                                    </label>
                                </div>

                                <div class="mt-3 login-bttn">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('text.login')}}</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i
                                            class="mdi mdi-lock me-1"></i> {{ __('messages.forgot_password')}}</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    ??
                        <script>document.write(new Date().getFullYear())</script> FoodStep. Gemaakt met <i
                            class="mdi mdi-heart text-danger"></i>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
@endsection