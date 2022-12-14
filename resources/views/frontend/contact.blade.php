@extends('layouts.frontend')

@section('title') {{ __('text.contacts') }} @endsection
@section('breadcumbTitle') {{ __('text.contacts') }} @endsection
@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-0">
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
                        <a href="mailto:contact@food-steps.nl" style="color: #323232;">contact@food-steps.nl</a>
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
                    <form class="contact-form-style" id="contact-form" action="{{url('/contact')}}" method="POST">
                     @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{__('text.name')}}" >

                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{__('text.email')}}" >
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="{{__('text.subject')}}" >

                                    <span class="text-danger">@error('subject'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <textarea rows="10" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="{{__('text.your_message')}}" ></textarea>
                                    <span class="text-danger">@error('message'){{ $message }} @enderror</span>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius-tiny btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">{{ __('text.send')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9916.164288568947!2d4.317110737919633!3d51.585810625230714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c46ab67b0de2e3%3A0x532ecc15b77c207d!2sBurgemeester%20van%20Loonstraat%2083%2C%204651%20CC%20Steenbergen%2C%20Netherlands!5e0!3m2!1sen!2sbd!4v1669273202405!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection