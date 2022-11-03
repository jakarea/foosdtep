@extends('layouts.frontend')

@section('content')

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="section-content m-b-40">
                    <h5 class="section-content__title text-center">My account</h5>
                </div>
            </div>
            <div class="col-lg-12"></div>
            <!-- Start Login Area -->
            <div class="col-lg-6 col-12">
                <div class="login-form-container">
                    <h5 class="sidebar__title">Login</h5>
                    <div class="login-register-form">
                    @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                        <form action="{{ route('customer.login') }}" method="post">
                            @csrf
                            <div class="form-box__single-group">
                                <label for="email">Username or email address *</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username / Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-box__single-group">
                                <label for="form-username-password">Password *</label>
                                <div class="password__toggle">
                                    <input type="password" id="form-username-password" name="password" class="@error('password') is-invalid @enderror" placeholder="Enter password" required autocomplete="current-password">
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
                                    <span>Remember me</span>
                                </label>
                                <a class="link--gray" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap m-tb-20 pt-3 align-middle">
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">LOGIN</button>
                                <div class="regiter-acc text-end">
                                    <span>Don't have an account? <a href="{{ url('register') }}">Register Here</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  <!-- End Login Area -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection