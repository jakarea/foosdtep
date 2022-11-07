@extends('layouts.frontend')
@section('breadcumbTitle') {{ __('Contact') }} @endsection
@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="contact-info-wrap gray-bg m-t-40">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+31 6 11 21 71 70">+31 6 11 21 71 70</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="mailto://info@foodsteps.nl">info@foodsteps.nl</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <span>Burgemeester van loonstraat 83,</span>
                            <span> 4651 VG, Steenbergen</span>
                        </div>
                    </div>
                    <div class="contact-social m-t-40">
                        <h5>{{__('text.follow_us')}}</h5>
                        <div class="social-link">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form gray-bg m-t-40">
                    <div class="section-content">
                        <h5 class="section-content__title">{{__('text.get_in_touch')}}</h5>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="text" placeholder="{{__('text.name')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="email" placeholder="{{__('text.email')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <input type="text" placeholder="{{__('text.subject')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <textarea rows="10" placeholder="{{__('text.your_message')}}" required></textarea>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius-tiny btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">{{ __('text.send')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection