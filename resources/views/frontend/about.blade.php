@extends('layouts.frontend') 

@section('title') {{ __('Over Ons') }} @endsection
@section('breadcumbTitle') {{ __('Over Ons') }} @endsection

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

                            
                        </div>
                    </div>
                </div>
            </div>         
        </div>

    </main> <!-- ::::::  End  Main Container Section  ::::::  -->


    @endsection