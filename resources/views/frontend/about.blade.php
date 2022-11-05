@extends('layouts.frontend')
@section('breadcumbTitle') {{ __('About') }} @endsection
@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->


<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
        <div class="about-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="img-responsive">
                            <img src="{{ asset('frontend/assets/img/about/about-us.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-content">
                        <h4 class="font--regular">Food Steps is een distributeur, groothandel in fine food.</h4>
                            <p class="para__text"> Na jaren genieten van prachtig eten en mooie wijnen is het tijd om die passie te delen.
Puur op basis van kwaliteit en smaak maken wij een bewuste keuze voor leveranciers en hun producten. Niet alleen hebben deze leveranciers een eigen verhaal maar staan zij ook achter dat van ons. 
</p>
<p class="para__text">Food Steps verkoopt en distribueert producten in Belgie en Nedertland op basis van importeursafspraken met de producenten en het maakt dan ook onderdeel uit van de keten. In overleg met zowel de chefs in beide landen als de leveranciers bepalen we wat interessant is voor onze markt. De producten zijn van uitmuntende kwaliteit en winnen waar mogelijk zelfs prijzen over de hele wereld.
</p>
<p class="para__text">We nodigen u graag uit voor een gesprek met ons en we laten u hierbij ook graag producten proeven want U weet wat u zoekt en wat bij uw onderneming past!
</p>
<p class="para__text">We hebben nu (en in de toekomst) de volgende categorieën nodig op de site. Is het mogelijk een aantal categorieën nog niet zichtbaar te laten zijn op de site? Of is het beter om deze later toe te voegen?
</p>
<p class="para__text">Is het mogelijk dat je via twee wegen bij 1 product kunt komen, bijvoorbeeld via conserven EN via vis bij een blikje sardines?
</p>
<p class="para__text"></p>

                            
                        </div>
                    </div>
                </div>
            </div>         
        </div>

        <!-- ::::::  Start CMS Section  ::::::  -->
        <div class="cms m-t-100 m-b-100">
            <div class="container">
                <div class="row">
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Free Shipping</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="far fa-money-bill-alt"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">100% Money Back Guarantee</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <i class="far fa-life-ring"></i>
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Online Support 24/7</h6>
                                <p class="para__text">Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                </div>
            </div>
        </div> <!-- ::::::  End CMS Section  ::::::  -->
         
       
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->


    @endsection