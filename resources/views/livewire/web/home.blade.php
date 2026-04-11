@section("meta_details")
    @include("web.seo.custom",['common'=>$page])
@endsection
<div>
    <style>
        .client-img {
            width: 100%;
            height: 260px !important;
            object-fit: contain;
        }

        @media (max-width: 991px) {
            .client-img {
                height: 200px !important;
            }
        }

        @media (max-width: 575px) {
            .client-img {
                height: 150px !important;
            }
        }
    </style>
    <div class="hero-1" id="hero">
        <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg">
                            <video autoplay muted loop>
                                <source src="{{asset("assets/video/building.mp4")}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero-big-text">Build Holistik</div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero-style1">
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideindown" data-ani-delay="0.3s" style="font-size:68px !important">
                                                Real Humans.<br> Real Life. Real Estate. </span>
                                        </h1>
                                        {{-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Sustainability, health, safety, and environmental impact assessments   of buildings.</p> --}}
                                        <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon" data-ani="slideinup" data-ani-delay="0.6s">Explore Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg">
                            <video autoplay muted loop>
                                <source src="{{asset("assets/video/building.mp4")}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero-big-text">Build Holistik</div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero-style1">
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideindown" data-ani-delay="0.3s" style="font-size:68px !important">
                                                Building Resilience. Ensuring Health </span>
                                        </h1>
                                        {{-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Certification   of buildings under the IMMUNE Building Standard™.</p> --}}
                                        <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon" data-ani="slideinup" data-ani-delay="0.6s">Explore Accredited Building</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg">
                            <video autoplay muted loop>
                                <source src="{{asset("assets/video/building.mp4")}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero-big-text">Build Holistik</div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero-style1">
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideindown" data-ani-delay="0.3s" style="font-size:68px !important">
                                                Pratical solutions for<br> Real World Problem. </span>
                                        </h1>
                                        {{-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Consulting   on workplace wellness, change management, and sustainable building design.</p> --}}
                                        <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon" data-ani="slideinup" data-ani-delay="0.6s">Explore Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg">
                            <video autoplay muted loop>
                                <source src="{{asset("assets/video/building.mp4")}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero-big-text">Build Holistik</div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero-style1">
                                        <h1 class="hero-title text-white">
                                            <span class="title1" data-ani="slideindown" data-ani-delay="0.3s" style="font-size:68px !important">
                                                Making lives<br> Easier,Safer and Better. </span>
                                        </h1>
                                        {{-- <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Consulting   on workplace wellness, change management, and sustainable building design.</p> --}}
                                        <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon" data-ani="slideinup" data-ani-delay="0.6s">Explore Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="slider-pagination"></div>
        </div>
        {{-- <div class="hero-social-link">
            <div class="social-wrap">
                <a href="{{$social->facebook_url}}">FACEBOOK</a>
                <a href="{{$social->linkedin_url}}">LINKEDIN</a>
                <a href="{{$social->twitterin_url}}">TWITTER</a>
            </div>
        </div> --}}
        <div class="scroll-down">
            <a href="#about-sec" class="hero-scroll-wrap"><i class="fal fa-long-arrow-left"></i>Scroll</a>
        </div>
    </div>
   
    <div class="counter-area-1 bg-smoke">
        <div class="container">
            <div class="counter-card-wrap space">
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">850</span>+</h2>
                        <p class="box-text">Globally Accredited</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">950</span>+</h2>
                        <p class="box-text">Certified Space</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">18</span>k+</h2>
                        <p class="box-text">Reduced Carbon Footprint</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">2</span>k+</h2>
                        <p class="box-text">ESG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space-top bg-theme" id="about-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <span class="shadow-title">About</span>
                        <h2 class="sec-title text-white">About Us</h2>
                        <p class="sec-text text-white">Build Holistik is affiliated with HDBI, the global accreditor of the IMMUNE Building Standard™. HDBI provides the framework, training, and certification for buildings worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btn">
                        <a href="{{route("web.aboutus")}}" class="th-btn btn-mask th-btn-icon">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="img1 img-shine bg-mask ms-4 col-lg-4 col-md-6">
                    <div class="rent-card">
                        <div class="box-icon">
                            <img src="{{asset("assets/img/icon/rent-icon1-2.svg")}}" alt="img">
                        </div>
                        <h4 class="box-title text-white">Objective</h4>
                        <p class="box-text">We integrate People, process and place</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img-box1">
                        <div class="img1 img-shine" data-mask-src="{{asset("assets/img/shape/about-1-mask.png")}}">
                            <img src="{{asset("assets/img/objective.png")}}" alt="About">
                        </div>
                    </div>
                </div>
               
                <div class="row gy-4 justify-content-center mb-3">
                    <div class="col-lg-6">
                        <div class="img-box1">
                            <div class="img1 img-shine" data-mask-src="{{asset("assets/img/shape/about-1-mask.png")}}">
                                <img src="{{asset("assets/img/outcome.jpg")}}" alt="About">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="rent-card">
                            <div class="box-icon">
                                <img src="{{asset("assets/img/icon/rent-icon1-1.svg")}}" alt="img">
                            </div>
                            <h4 class="box-title text-white">Outcome</h4>
                            <p class="box-text">*Experience *Efficiency *Effectiveness</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-60">
                <div class="row gy-40 flex-row-reverse">
                    <div class="col-xl-3 text-xl-end">
                        <div class="about-tag">
                            <div class="about-experience-tag">
                                <span class="circle-title-anime">Healthy <i class="fas fa-star"></i> Safety & Immune Infrastructure</span>
                            </div>
                            <div class="about-tag-thumb">
                                <img src="{{asset("assets/img/building_2.png")}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-wrap1">
                            <p class="about-text text-white">Build Holistik is the Indian arm of the Healthy by Design Building Institute (HDBI), which is a globally recognized accreditor for the   IMMUNE Building Standard™ .</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <section class="service-area-1 overflow-hidden space-bottom bg-theme pt-80" id="service-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="{{asset("assets/img/icon/service-icon1-1.png")}}" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">STRONG</a></h3>
                            <p class="box-text">equivalent of 3 stars, based on a scoring between 55% and 70% received during the assessment</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="{{asset("assets/img/icon/service-icon1-2.png")}}" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">POWERFUL</a></h3>
                            <p class="box-text">equivalent of 4 stars, based on a scoring between 71% and 85% received during the assessment</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="{{asset("assets/img/icon/service-icon1-3.png")}}" alt="Icon">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">RESILIENT</a></h3>
                            <p class="box-text">equivalent of 5 stars, based on a scoring of over 85% received during the assessment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-area-1 space overflow-hidden" data-bg-src="{{asset("assets/img/bg_image.jpg")}}" data-opacity="5" data-overlay="title">
        <div class="container">
            <div class="project-wrap1">
                <div class="project-number-pagination" data-slider-tab="#projectSlider1">
                    <div class="tab-btn active">
                        <span>01</span>
                    </div>
                    <div class="tab-btn">
                        <span>02</span>
                    </div>
                    <div class="tab-btn">
                        <span>03</span>
                    </div>
                    <div class="tab-btn">
                        <span>04</span>
                    </div>
                </div>
                <div class="row gy-50 justify-content-between align-items-center">
                    <div class="col-xxl-5 col-xl-8">
                        <div class="project-title-wrap1">
                            <div class="title-area mb-40">
                                <span class="shadow-title">Build Holistik</span>
                                <h2 class="sec-title text-white">Book an Build Holistik Speaker</h2>
                                <p class="sec-text text-white mt-15">Invite an Build Holistik expert to speak at your next event, conference, or workshop. Our speakers are industry leaders in health-resilient building design, sustainability, and workplace wellness. Contact us to book a speaker and inspire your audience with insights on the future of healthy buildings.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="slider-area project-slider-area">
                            <div class="swiper th-slider project-slider1" id="projectSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}},"loop":false, "thumbs":{"swiper":".project-number-pagination"}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="portfolio-card">
                                            <div class="portfolio-img img-shine">
                                                <img src="{{asset("assets/projects/pmi-crop/1.png")}}" class="project_image"  alt="project image">
                                            </div>
                                            {{-- <div class="portfolio-content">
                                                <a href="#portfolioModal" class="icon-btn"><img src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio-card">
                                            <div class="portfolio-img img-shine">
                                                <img src="{{asset("assets/projects/pmi-crop/2.png")}}" class="project_image"  alt="project image">
                                            </div>
                                            {{-- <div class="portfolio-content">
                                                <a href="#portfolioModal" class="icon-btn"><img src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio-card">
                                            <div class="portfolio-img img-shine">
                                                <img src="{{asset("assets/projects/pmi-crop/3.png")}}" class="project_image" alt="project image">
                                            </div>
                                            {{-- <div class="portfolio-content">
                                                <a href="#portfolioModal" class="icon-btn"><img src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio-card">
                                            <div class="portfolio-img img-shine">
                                                <img src="{{asset("assets/projects/pmi-crop/4.png")}}" class="project_image"  alt="project image">
                                            </div>
                                            {{-- <div class="portfolio-content">
                                                <a href="#portfolioModal" class="icon-btn"><img src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                            </div> --}}
                                        </div>
                                    </div>

                                </div>
                                <div class="slider-pagination d-sm-block d-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space bg-theme" id="property-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <span class="shadow-title">Listing</span>
                        <h2 class="sec-title text-white">Accredited Buildings</h2>
                        <p class="sec-text text-white">We are a real estate firm with over 20 years of expertise, and our main goal is to provide amazing locations to our partners and clients.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{route("web.accredited")}}" class="th-btn btn-mask th-btn-icon">All Accredited Buildings</a>
                    </div>
                </div>
            </div>
            @foreach($press_releases as $key => $press_release)
                @if($key%2==0)
                    <div class="property-card-wrap">
                        <div class="property-thumb img-shine" data-mask-src="{{asset("assets/img/shape/property-card1-img-mask.png")}}">
                            <img src="{{asset($press_release->banner_image)}}" alt="{{$press_release->title}}">
                        </div>
                        <div class="property-card">
                            <div class="property-card-number">
                                0{{$key+1}} </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Press Release</span>
                                <h4 class="property-card-title"><a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate>{{$press_release->title}}</a></h4>
                                <p class="property-card-text">{{$press_release->short_description}}</p>
                                <div class="property-card-price-meta">
                                    @if($press_release->post_date)<h5 class="property-card-price">{{Carbon\Carbon::parse($press_release->post_date)->format("d M, Y")}}</h5>@endif
                                </div>
                                <div class="property-btn-wrap">
                                    {{-- <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-2.png" alt="img">
                                        <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate>Admin</a>
                                    </div> --}}
                                    <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate class="th-btn btn-mask2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="property-card-wrap">
                        <div class="property-card">
                            <div class="property-card-number">
                                0{{$key+1}} </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Press Release</span>
                                <h4 class="property-card-title"><a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate>{{$press_release->title}}</a></h4>
                                <p class="property-card-text">{{$press_release->short_description}}</p>
                                <div class="property-card-price-meta">
                                    @if($press_release->post_date)<h5 class="property-card-price">{{Carbon\Carbon::parse($press_release->post_date)->format("d M, Y")}}</h5>@endif
                                </div>
                                <div class="property-btn-wrap">
                                    {{-- <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-2.png" alt="img">
                                        <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate>Admin</a>
                                    </div> --}}
                                    <a href="{{route("web.press-releases-landing",$press_release->slug)}}" wire:navigate class="th-btn btn-mask2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="property-thumb img-shine" data-mask-src="{{asset("assets/img/shape/property-card1-img-mask.png")}}">
                            <img src="{{asset($press_release->banner_image)}}" alt="{{$press_release->title}}">
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>

    <section class="overflow-hidden" style="padding-top:55px !important;padding-bottom:30px !important;">
        <div class="container">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <span class="shadow-title style2">Clients</span>
                        <h2 class="sec-title">Clients</h2>
                    </div>
                </div>
            </div>
            {{-- <div class="row gy-40">
                <div class="col-md-12">
                    <div class="property-card2 d-flex justify-content-center align-items-center px-4">
                        <div class="img-fluid">
                            <img src="{{asset("assets/client/1.png")}}" alt="img" style="width:135px !important;height:135px !important;">
                            <img src="{{asset("assets/client/tec.png")}}" alt="img" style="width:160px !important;height:150px !important;margin-left:30px;">
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xxl-4 col-lg-4 col-sm-12">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="mb-4">
                            <img src="{{asset("assets/client/tec_client.png")}}" class="client-img" alt="BIAL">
                        </div>
                        <div class="blog-content mt-4">
                            <div class="text-center">
                                <h4 class="blog-title">TEC One BKC Centre Offices</h4>
                                <div class="text-center">
                                    <a href="javascript:void(0)" class="text-center">One BKC Centre, G Block, Bandra Kurla Complex, Bandra East, Mumbai, India</a>
                                    <span><b>Label:</b> IMMUNE™ Powerful - Tenant Office Space</span>
                                    <p><b>Year:</b> 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4 col-sm-12">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="mb-4">
                            <img src="{{asset("assets/client/1.png")}}" class="client-img" alt="BIAL">
                        </div>
                        <div class="blog-content mt-4">
                            <div class="text-center">
                                <h4 class="blog-title">BIAL</h4>
                                <div class="text-center">
                                    <a href="javascript:void(0)">Bravo 1, administration block,Bengaluru,Karnataka,India</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 mt-4 bg-theme" id="team-sec" style="padding-top:55px !important;padding-bottom:55px !important;">
        <div class="container z-index-common">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="title-area">
                        {{-- <span class="shadow-title">Team</span> --}}
                        <h2 class="sec-title text-white">Our Team Member</h2>
                        <p class="sec-text text-white">We are a real estate firm with over 20 years of expertise, We provide amazing locations to our partners and clients.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{route("web.aboutus")}}" class="th-btn btn-mask th-btn-icon">View About</a>
                    </div>
                </div>
            </div>
          
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/ceo.jpeg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Nikitha Rayappa</h4>
                            <span class="team-desig">Founder and Business Head</span>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/founder.jpeg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Padigala Seshadri</h4>
                            <span class="team-desig">Founder ODC Standards Certifications</span>
                        </div>
                    </div>
                </div> -->

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/patel.jpg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Priyank Patel</h4>
                            <span class="team-desig">Director, Certification Strategy and Compliance Alignment</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/3.jpeg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Manasa Reddy</h4>
                            <span class="team-desig"> Business Development Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/black_white_1.png")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Riya Jajodia</h4>
                            <span class="team-desig">Immune analyst</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/abishek.jpeg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Abhishek</h4>
                            <span class="team-desig">Tech Support</span>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/ankit.jpeg")}}" alt="img">
                        </div>
                        <div class="text-center mt-2">
                            <h4 class="text-white">Ankit</h4>
                            <span class="team-desig">Tech Support</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Certification</h2>
                        <p class="sec-text text-title">The     IMMUNE Building Standard™     is a blueprint for the healthy buildings of the future. It evaluates buildings across     135 criteria    , covering governance, access, outdoor spaces, common areas, office spaces, amenities, and facility management. Buildings can achieve one of three certification levels</p>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                <div class="col-md-6 col-xl-4">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/certificate_1.jpg")}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/certificate_2.jpg")}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="property-card2">
                        <div class="property-card-thumb img-shine">
                            <img src="{{asset("assets/img/certificate_3.jpg")}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .border-home{
            border:1px solid #382020;
            border-radius:25px;
            padding:25px;
        }
        .border-rad{
            border-radius: 30px !important;
        }
    </style>

    <section class="space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center align-items-center border-home">
                <div class="video-wrap1">
                    <div class="video-box1">
                        <img src="{{asset("assets/img/1105.jpg")}}" alt="img" class="border-rad">
                        {{-- <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style3 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
                    </div>
                    <div class="video-wrap-details">
                        <div class="title-area mb-45">
                            <h2 class="sec-title">Become an IMMUNE™ Assessor</h2>
                            <p class="sec-text text-title">Institutes or specialized building standard issuers have a key role in creating the IMMUNE™ buildings of the future. </p>
                        </div>
                        <div class="btn-wrap mb-55">
                            <a href="{{route("web.projects")}}" class="th-btn style2 btn-mask th-btn-icon">Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="space bg-theme" id="blog-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="title-area">
                        <span class="shadow-title">Coverage</span>
                        <h2 class="sec-title text-white">Latest Media Coverage</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{route("web.media-coverage")}}" class="th-btn btn-mask th-btn-icon">Browse All Coverage</a>
                    </div>
                </div>
            </div>
            @foreach($media_coverages as $key1=> $coverage)
                @if($key1%2==0)
                    <div class="blog-grid">
                        <div class="blog-content home-blog-content">
                            <span class="subtitle">{{@$coverage->mediacoverage->name}}</span>
                            <h3 class="box-title"><a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">{{$coverage->title}}</a></h3>
                            <p class="sec-text text-white">{{$coverage->short_description}}</p>
                            <div class="blog-bottom-wrap">
                                @if($coverage->author_name)
                                <div class="blog-author-wrap">
                                    <div class="avatar">
                                        <img src="{{asset("assets/img/blog/avatar_2.png")}}" alt="">
                                    </div>
                                    <a href="#">By {{$coverage->author_name}}</a>
                                </div>
                                @endif
                                @if($coverage->post_date) <div class="blog-date">
                                    {{Carbon\Carbon::parse($coverage->post_date)->format("M d, Y")}} </div>@endif
                                <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank" class="th-btn btn-mask2 th-btn-icon">Read More</a>
                            </div>
                        </div>
                        <div class="blog-img img-shine" data-mask-src="{{asset("assets/img/shape/blog-card1-img-mask.png")}}">
                            <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">
                                <img src="{{asset($coverage->image)}}" alt="{{$coverage->title}}">
                            </a>
                        </div>
                    </div>
                @else
                    <div class="blog-grid">
                        <div class="blog-img img-shine" data-mask-src="{{asset("assets/img/shape/blog-card1-img-mask.png")}}">
                            <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">
                                <img src="{{asset($coverage->image)}}" alt="{{$coverage->title}}">
                            </a>
                        </div>
                        <div class="blog-content home-blog-content">
                            <span class="subtitle">{{@$coverage->mediacoverage->name}}</span>
                            <h3 class="box-title"><a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank">{{$coverage->title}}</a></h3>
                            <p class="sec-text text-white">{{$coverage->short_description}}</p>
                            <div class="blog-bottom-wrap">
                                @if($coverage->author_name)
                                <div class="blog-author-wrap">
                                    <div class="avatar">
                                        <img src="{{asset("assets/img/blog/avatar_2.png")}}" alt="">
                                    </div>
                                    <a href="javascript:void(0)">By {{$coverage->author_name}}</a>
                                </div>
                                @endif
                                @if($coverage->post_date) <div class="blog-date">
                                    {{Carbon\Carbon::parse($coverage->post_date)->format("M d, Y")}} </div>@endif
                                <a href="{{route("web.media_coverage",$coverage->slug)}}" target="_blank" class="th-btn btn-mask2 th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</div>
