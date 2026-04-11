@extends('web.layouts.master')
@section('meta_details')
    @include('web.seo.custom', ['common' => @$page])
@endsection
@section('content')
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Clients</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-lg-4 col-sm-12">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <img src="{{asset("assets/client/tec_client.png")}}" alt="BIAL" style="object-fit: contain;">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta text-center">
                                <h4 class="blog-title">TEC One BKC Centre Offices</h4>
                                <a href="javascript:void(0)" class="text-center">One BKC Centre, G Block, Bandra Kurla Complex, Bandra East, Mumbai, India</a>
                                <span class="text-center">Label: IMMUNE™ Powerful - Tenant Office Space</span>
                                <p class="text-center">Year: 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-sm-12">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <img src="{{asset("assets/client/1.png")}}" alt="BIAL">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <h4 class="blog-title">BIAL</h4><br/>
                            </div>
                            <a href="javascript:void(0)">Bravo 1, administration block,Bengaluru,Karnataka,India</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection