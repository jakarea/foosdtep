@extends('layouts.backend')
@section('title') Setting @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Basic Settings</h4>
                    <p class="card-title-desc">Explore basic settingts and change whatever need to do</p>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link mb-2 active" id="v-pills-media_setting-tab" data-bs-toggle="pill" href="#v-pills-media_setting" role="tab" aria-controls="v-pills-media_setting" aria-selected="true">Media Settings</a>
                                <a class="nav-link mb-2" id="v-pills-platform_setting-tab" data-bs-toggle="pill" href="#v-pills-platform_setting" role="tab" aria-controls="v-pills-platform_setting" aria-selected="false" tabindex="-1">Platform Setting</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-media_setting" role="tabpanel" aria-labelledby="v-pills-media_setting-tab">
                                    <p>
                                        Raw denim you probably haven't heard of them jean shorts Austin.
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                        Mustache cliche tempor, williamsburg carles vegan helvetica.
                                        Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                        sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan.
                                    </p>
                                    <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                        sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-platform_setting" role="tabpanel" aria-labelledby="v-pills-platform_setting-tab">
                                    <p>
                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                        single-origin coffee squid. Exercitation +1 labore velit, blog
                                        sartorial PBR leggings next level wes anderson artisan four loko
                                        farm-to-table craft beer twee. Qui photo booth letterpress,
                                        commodo enim craft beer mlkshk.
                                    </p>
                                    <p class="mb-0"> Qui photo booth letterpress, commodo enim craft
                                        beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                                        Homo nostrud organic, assumenda labore aesthetic magna 8-bit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection