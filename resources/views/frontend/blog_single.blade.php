@extends('layouts.frontend') 

@section('title') {{ __('berichten') }} @endsection
@section('breadcumbTitle') {{ __('berichten') }} @endsection

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->



<div class="container">
    <div class="row flex-column-reverse flex-lg-row">
        <!-- Start Leftside - Sidebar Widgets -->
        <div class="col-lg-3">
            <div class="sidebar">
                <!-- Start Single Sidebar Widget - Recent Post -->
                <div class="sidebar__widget">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">{{ __('text.recent_post')}}</h5>
                    </div>
                    <ul class="sidebar__post-blog list-space--small">
                    @php
                        $i = 1;
                        @endphp
                        @foreach($blogs as $blog2)
                        <li class="d-flex align-items-center ">
                        @if($blog2->image)
                            <a class="sidebar__post-img img-responsive" href="{{url('blog/'. $blog2->slug) }}">
                                <img src="{{ asset('backend/assets/images/blog/'. $blog2->image) }}" alt="" style="width:82px">
                            </a>
                            @endif
                            <div class="sidebar__post-content">
                                <span class="d-block color-gray">{{ date('M d,Y', strtotime($blog2->created_at)); }}</span>
                                <a class="link--gray" href="{{url('blog/'. $blog2->slug) }}">{{$blog2->title,0,70}}</a>
                            </div>
                        </li>
                        @php
                        if(++$i > 3) break;
                        @endphp
                        @endforeach
                    </ul>
                </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                <!-- Start Single Sidebar Widget - Custom Menu -->
                <div class="sidebar__widget">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">{{ __('text.categories')}}</h5>
                    </div>
                    <ul class="sidebar__menu">
                    @foreach(App\Models\Backend\Category::inRandomOrder()->limit(10)->get() as $key => $category)
                        <li><a href="{{ url('products?cat='.$category->slug)}}">{{ $category->name }} </a></li> 
                    @endforeach
                    </ul>
                </div>  <!-- End Single Sidebar Widget - Custom Menu -->
            </div>
        </div>  <!-- End Left Sidebar  Widgets-->

            <!-- Start Rightside - Content -->
        <div class="col-lg-9">
            <div class="blog">
                <div class="row">
                    <!-- Start Single Blog List -->
                    <div class="col-12">
                        <div class="blog__type-single">
                            @if($blog->image)
                                <div class="img-responsive"><img src="{{url('backend/assets/images/blog/'.$blog->image)}}" alt=""></div>
                            @endif
                            <div class="blog__content">
                                <h3 class="blog__title">{{ $blog->title}}</h3>
                                <div class="blog__archive m-t-20">
                                    <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> {{ date('M d,Y', strtotime($blog->created_at)); }}</a>
                                    <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> {{$blog->user->name}}</a>
                                </div>
                                <div class="para m-tb-20">
                                    {{$blog->body}}
                                </div>
                            </div>
                        </div> 
                    </div> <!-- End Single Blog List -->
                </div>
            </div>

        </div>  <!-- Start Rightside - Content -->
        
    </div>
</div>


        @endsection