<div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="{{asset('frontend/assets/img/newsletter/Speciale kortingen.webp')}}" alt="a">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2 class="text-white">{{ __('text.subscribe_us')}}</h2>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form class="newsletter__form" action="{{ route('subscribe')}}" method="post">
                                @csrf
                                <div class="newsletter__form-content pos-relative">
                                    <label class="pos-absolute" for="newsletter-mail"><i class="icon-mail"></i></label>
                                    <input type="email" name="email" id="newsletter-mail" placeholder="{{ __('text.your_email_address')}}">
                                    @error('email')
                                        <span class="invalid-feedback3" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button class="text-uppercase pos-absolute" type="submit" >{{ __('text.subscribe')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>