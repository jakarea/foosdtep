<div class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
    
            @foreach($sliders as $slider)
            <!-- Start Single Hero Slide --> 
            <div class="hero-slider">
            
                <img src="{{ asset('backend/assets/images/slider/'. $slider->image) }}" alt="Slider">
                <div class="hero__content">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <div class="{{ $slider->text_bg }}">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">{{$slider->top_subtitle}}</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">{{$slider->title}}</h1>
                                    <h4 class="title__hero title__hero--small font--regular">{{$slider->bottom_subtitle}}</h4>
                                    <a href="{{$slider->button_link}}" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">{{$slider->button_text}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            @endforeach
            
            
        </div>