@section('meta_details')
    @include('web.seo.custom', ['common' => @$press_release])
@endsection
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{$press_release->title}}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Press Release</li>
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
                            <img src="{{asset($press_release->banner_image)}}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="javascript:void(0)"><i class="far fa-house-building"></i>Press Release</a>
                            </div>
                            <h2 class="blog-title">{{$press_release->title}}</h2>
                            <p class="blog-text">{{$press_release->short_description}}</p>
                            <p class="blog-text">{!! $press_release->description !!}</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="#">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="far fa-calendar"></i>22/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="#">Harmony With Nature Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="far fa-calendar"></i>25/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="#">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="far fa-calendar"></i>27/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div> --}}
            </div>
        </div>
    </section>
</div>
