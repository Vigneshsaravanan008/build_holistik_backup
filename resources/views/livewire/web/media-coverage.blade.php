@section('meta_details')
    @include('web.seo.custom', ['common' => @$page])
@endsection
<div>
    <style>
        .fs-12{
            font-size:12px !important;
        }
    </style>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Media Coverage</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Media Coverage</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                @foreach($media_coverages as $coverage)
                    <div class="col-xxl-4 col-lg-4 col-sm-12">
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank"><img src="{{asset($coverage->image)}}" alt="{{$coverage->title}}"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    @if($coverage->author_name)<a class="author" href="#"><i class="far fa-user"></i>{{$coverage->author_name}}</a>@endif
                                    @if($coverage->post_date)<a href="#"><i class="far fa-clock"></i>{{Carbon\Carbon::parse($coverage->post_date)->format("d M, Y")}}</a>@endif
                                    <a href="#"><i class="far fa-house-building"></i>{{@$coverage->mediacoverage->name}}</a>
                                </div>
                                <h2 class="blog-title"><a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">{{ $coverage->title }}</a></h2>
                                <h4 class="blog-title fs-12"><a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">{{ substr($coverage->short_description, 0, 80) }}</a></h4>
                                {{-- <p class="blog-text">{!!$coverage->description!!}</p> --}}
                                <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank" class="th-btn style-border2 th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if($load_more)
                    <div wire:loading>
                        <div class="d-flex flex-column align-items-center">
                            <div class="customer_loader">
                                <label>Loading...</label>
                                <div class="custom_loading"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 mt-lg-5 mt-md-5 ps-lg-5 text-center text-lg-start">
                        <a wire:click="loadmore" class="load-more blue-linear fs-18 fw-500 lh-27 br-8 text-decoration-none cl-white">
                            Load more
                        </a>
                    </div>
                @endif
            </div>
        </div>
</div>
</section>
</div>
