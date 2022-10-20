@extends('layouts.frontend')

@section('content')

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40">
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
                        <form action="#" method="post">
                            <div class="form-box__single-group">
                                <label for="form-username">Username or email address *</label>
                                <input type="text" id="form-username" placeholder="Username" required>
                            </div>
                            <div class="form-box__single-group">
                                <label for="form-username-password">Password *</label>
                                <div class="password__toggle">
                                    <input type="password" id="form-username-password" placeholder="Enter password" required>
                                    <span data-bs-toggle="#form-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                <label for="account-remember">
                                    <input type="checkbox" name="account-remember" id="account-remember">
                                    <span>Remember me</span>
                                </label>
                                <a class="link--gray" href="">Forgot Password?</a>
                            </div>
                            <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>  <!-- End Login Area -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection