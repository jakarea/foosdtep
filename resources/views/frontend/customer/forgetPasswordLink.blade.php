@extends('layouts.frontend')
@section('title') {{ __('Reset Password') }} @endsection
@section('content')

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="section-content m-b-40">
                    <h5 class="section-content__title text-center">Reset Password</h5>
                </div>
            </div>
            <div class="col-lg-12"></div>
            <!-- Start Login Area -->
            <div class="col-lg-6 col-12">
                <div class="login-form-container">
                    <div class="login-register-form">
                    @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif
                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-box__single-group">
                                <label for="email">Email Address</label>
                                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-box__single-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-box__single-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between flex-wrap m-tb-20 pt-3 align-middle">
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">Reset Password</button>
                                <div class="regiter-acc text-end">
                                    <span>Do you remeber Password? <a href="{{ route('customer.loginform') }}">Login Here</a></span>
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