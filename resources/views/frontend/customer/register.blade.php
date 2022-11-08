@extends('layouts.frontend')
@section('title') {{ __('Register Customer') }} @endsection
@section('content')
 

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-content m-b-40">
                    <h5 class="section-content__title text-center">{{__('text.my_account')}}</h5>
                </div>
            </div>
            <div class="col-lg-12"></div>
            <!-- Start Login Area --> 
            <div class="col-lg-6 col-12">
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
                            <div class="d-flex justify-content-between flex-wrap m-tb-20 pt-3 align-middle">
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">{{__('text.register_now') }} </button>
                                <div class="regiter-acc text-end">
                                    <span>{{__('text.already_have_account') }} <a href="{{ url('login') }}">{{__('text.login_here') }}</a></span>
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