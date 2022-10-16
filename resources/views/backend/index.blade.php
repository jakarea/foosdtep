@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-tag-plus-outline"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">New Orders</div>
                    </div>
                </div>
                <h4 class="mt-4">1,368</h4>
                <div class="row">
                    <div class="col-7">
                        <p class="mb-0"><span class="text-success me-2"> 0.28% <i
                                    class="mdi mdi-arrow-up"></i> </span></p>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 62%"
                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-account-multiple-outline"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">New Users</div>

                    </div>
                </div>
                <h4 class="mt-4">2,456</h4>
                <div class="row">
                    <div class="col-7">
                        <p class="mb-0"><span class="text-success me-2"> 0.16% <i
                                    class="mdi mdi-arrow-up"></i> </span></p>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 62%"
                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Sales Report</h4>

                <div id="line-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Revenue</h4>

                <div id="column-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Sales Analytics</h4>

                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div id="donut-chart" class="apex-charts"></div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="py-3">
                                        <p class="mb-1 text-truncate"><i
                                                class="mdi mdi-circle text-primary me-1"></i> Online
                                        </p>
                                        <h5>$ 2,652</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="py-3">
                                        <p class="mb-1 text-truncate"><i
                                                class="mdi mdi-circle text-success me-1"></i>
                                            Offline</p>
                                        <h5>$ 2,284</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="py-3">
                                        <p class="mb-1 text-truncate"><i
                                                class="mdi mdi-circle text-warning me-1"></i>
                                            Marketing</p>
                                        <h5>$ 1,753</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Sales</h4>

                <div id="scatter-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Overview</h4>

                <div>
                    <div class="pb-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">New Visitors</p>
                                <h4 class="mb-0">3,524</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                    </div>
                                    <div class="progress progress-sm mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 62%"
                                            aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Product Views</p>
                                <h4 class="mb-0">2,465</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        0.37 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                    </div>
                                    <div class="progress progress-sm mt-3">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Revenue</p>
                                <h4 class="mb-0">$ 4,653</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        2.18 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                    </div>
                                    <div class="progress progress-sm mt-3">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection