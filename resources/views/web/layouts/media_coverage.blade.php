@extends("web.layouts.master")
@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
@section("content")
<div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">{{$media_coverage->title}}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{url("/")}}">Home</a></li>
                        <li>Media Coverage</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="th-blog-wrapper blog-details overflow-hidden space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-30">
            <div class="col-xxl-12 col-lg-12">
                <div class="th-blog blog-single mb-0">
                    <div class="blog-img">
                        <img src="{{asset($media_coverage->image)}}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="javascript:void(0)"><i class="far fa-house-building"></i>Media Coverage</a>
                        </div>
                        <h2 class="blog-title">{{$media_coverage->title}}</h2>
                        <p class="blog-text">{{$media_coverage->short_description}}</p>
                        <p class="blog-text">{!! $media_coverage->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection