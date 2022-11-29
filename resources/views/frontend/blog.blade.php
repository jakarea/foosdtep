@extends('layouts.frontend') 

@section('title') {{ __('Over Ons') }} @endsection
@section('breadcumbTitle') {{ __('Over Ons') }} @endsection

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
                        @foreach($blogs as $blog)
                        <li class="d-flex align-items-center ">
                            <a class="sidebar__post-img img-responsive" href="{{url('blog/'. $blog->slug) }}">
                                <img src="{{ asset('backend/assets/images/blog/'. $blog->image) }}" alt="" style="width:82px">
                            </a>
                            <div class="sidebar__post-content">
                                <span class="d-block color-gray">{{ date('M d,Y', strtotime($blog->created_at)); }}</span>
                                <a class="link--gray" href="{{url('blog/'. $blog->slug) }}">{{$blog->title,0,70}}</a>
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
                        <li><a href="{{ route('show.category', $category->slug)}}">{{ $category->name }} </a></li> 
                    @endforeach
                    </ul>
                </div>  <!-- End Single Sidebar Widget - Custom Menu -->
            </div>
        </div>  <!-- End Left Sidebar  Widgets-->

            <!-- Start Rightside - Content -->
        <div class="col-lg-9">
            <div class="row"> 
                @foreach($blogs as $blog)
                    <div class="col-lg-6"> 
                    <!-- Start Single Blog Feed -->
                    <div class="blog-feed">
                        <!-- Start Blog Feed Image -->
                        <div class="blog-feed__img-box">
                            <a href="{{url('blog/'. $blog->slug)}}" class="blog-feed__img--link">
                            <img src="{{ asset('backend/assets/images/blog/'. $blog->image) }}" alt="Cate" class="img-fluid" >
                            </a>
                        </div> <!-- End  Blog Feed Image -->
                        <!-- Start  Blog Feed Content -->
                        <div class="blog-feed__content ">
                            <a href=" {{url('blog/'. $blog->slug) }}" class="blog-feed__link">{{$blog->title}}</a>
                            
                            <div class="blog-feed__post-meta">
                                {{ __('messages.by')}}
                                <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--author">{{$blog->user->name}} /</span></a> 
                                <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--date">{{ date('M d,Y', strtotime($blog->created_at)); }}</span></a> 
                                
                            </div>
                            <p class="blog-feed__excerpt">{{ substr($blog->body,0,170)}}</p>

                            <a href="{{url('blog/'. $blog->slug)}}" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">{{__('text.more_info')}}</a>
                        </div> <!-- End  Blog Feed Content -->
                    </div> 
                    <!-- End Single Blog Feed --> 
                    </div>
                    @endforeach
                </div>
        </div>  <!-- Start Rightside - Content -->
        
    </div>
</div>


        @endsection