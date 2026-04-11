@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Accredited Buildings</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Accredited Buildings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                @foreach($press_releases as $press_release)
                    <div class="col-xxl-4 col-lg-4 col-sm-12">
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate><img src="{{asset($press_release->banner_image)}}" alt="{{$press_release->title}}"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="#"><i class="far fa-user"></i>Press Release</a>
                                    @if($press_release->post_date)<a href="#"><i class="far fa-clock"></i>{{Carbon\Carbon::parse($press_release->post_date)->format("d M, Y")}}</a>@endif
                                </div>
                                <h4 class="blog-title"><a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate>{{$press_release->title}}</a></h4>
                                <p>{{$press_release->short_description}}</p>
                                <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate class="th-btn style-border2 th-btn-icon">Read More</a>
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
    </section>
</div>
